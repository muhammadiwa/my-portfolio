<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #A8FF53 0%, #84E241 100%);
            padding: 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 0 0 8px 8px;
        }
        .title {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }
        .label {
            font-weight: bold;
            color: #666666;
            width: 100px;
            display: inline-block;
        }
        .message-box {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0f0f0;
            color: #999999;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">New Message Received</h1>
    </div>
    
    <div class="content">
        <div class="info-item">
            <span class="label">Name:</span>
            <span>{{ $name }}</span>
        </div>
        
        <div class="info-item">
            <span class="label">Email:</span>
            <span>{{ $email }}</span>
        </div>
        
        <div class="info-item">
            <span class="label">Phone:</span>
            <span>{{ $phone }}</span>
        </div>
        
        <div class="info-item">
            <span class="label">Subject:</span>
            <span>{{ $subjectLine }}</span>
        </div>
        
        <div class="message-box">
            <p><strong>Message:</strong></p>
            <p style="white-space: pre-line;">{{ $messageContent }}</p>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>This email was sent from your portfolio website's contact form.</p>
        </div>
    </div>
</body>
</html>