<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Messages', ContactMessage::count())
                ->description('Total messages received')
                ->icon('heroicon-m-envelope')
                ->color('success'),
            
            Stat::make('Unread Messages', ContactMessage::where('is_read', false)->count())
                ->description('Messages waiting to be read')
                ->icon('heroicon-m-envelope-open')
                ->color('warning'),
            
            Stat::make('Today\'s Messages', ContactMessage::whereDate('created_at', today())->count())
                ->description('Messages received today')
                ->icon('heroicon-m-inbox')
                ->color('primary'),
        ];
    }
}
