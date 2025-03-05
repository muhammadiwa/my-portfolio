<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\ContactMessage;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class MessagesChart extends ChartWidget
{
    protected static ?string $heading = 'Messages Overview';
    protected static ?string $pollingInterval = '10s';
    protected static ?int $sort = 2;
    
    // Add this property for full width
    protected int | string | array $columnSpan = 'full';
    
    // Change type declaration to match parent class
    public ?string $filter = 'today';

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'This Week',
            'month' => 'This Month',
            'year' => 'This Year',
            'last_month' => 'Last Month',
        ];
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;
        
        $query = ContactMessage::query();

        // Apply date filters
        $query->when($activeFilter === 'today', function ($query) {
            return $query->whereDate('created_at', today());
        })->when($activeFilter === 'week', function ($query) {
            return $query->whereBetween('created_at', [
                now()->startOfWeek(),
                now()->endOfWeek(),
            ]);
        })->when($activeFilter === 'month', function ($query) {
            return $query->whereBetween('created_at', [
                now()->startOfMonth(),
                now()->endOfMonth(),
            ]);
        })->when($activeFilter === 'year', function ($query) {
            return $query->whereBetween('created_at', [
                now()->startOfYear(),
                now()->endOfYear(),
            ]);
        })->when($activeFilter === 'last_month', function ($query) {
            return $query->whereBetween('created_at', [
                now()->subMonth()->startOfMonth(),
                now()->subMonth()->endOfMonth(),
            ]);
        });

        // Group by date and count messages
        $messages = $query->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $labels = [];
        $data = [];

        // Format data based on filter
        foreach ($messages as $message) {
            $date = Carbon::parse($message->date);
            $format = match ($activeFilter) {
                'today' => 'H:i',
                'week' => 'D',
                'month', 'last_month' => 'd M',
                'year' => 'M',
                default => 'd M',
            };
            
            $labels[] = $date->format($format);
            $data[] = $message->count;
        }

        // If no data, show empty state
        if (empty($data)) {
            $labels = ['No data'];
            $data = [0];
        }

        return [
            'datasets' => [
                [
                    'label' => 'Messages',
                    'data' => $data,
                    'borderColor' => '#A8FF53',
                    'fill' => true,
                    'backgroundColor' => 'rgba(168, 255, 83, 0.1)',
                    'tension' => 0.4,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}