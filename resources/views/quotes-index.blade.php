<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | TMS Integrated Service</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS for Tables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <style>
        body { background-color: #f4f4f4; font-family: 'Poppins', sans-serif; }
        .admin-container { padding: 40px; }
        .card { border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-radius: 10px; }
        .table thead { background-color: #0056b3; color: white; }
        .table tbody tr:hover { background-color: #f1f1f1; }
        .badge-new { background-color: #28a745; color: white; padding: 5px 10px; border-radius: 20px; font-size: 0.8em; }
        .action-btn { padding: 5px 10px; text-decoration: none; border-radius: 5px; color: white; font-size: 0.9em; }
        .btn-view { background-color: #17a2b8; }
        .btn-delete { background-color: #dc3545; }
    </style>
</head>
<body>

<div class="admin-container">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Quote Requests Dashboard</h2>
            <a href="{{ route('home') }}" class="btn btn-secondary">View Website</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotes as $quote)
                            <tr>
                                <td>#{{ $quote->id }}</td>
                                <td>
                                    <strong>{{ $quote->name }}</strong><br>
                                    <small>{{ $quote->phone }}</small>
                                </td>
                                <td>{{ $quote->email }}</td>
                                <td>{{ $quote->freight_type }}</td>
                                <td>
                                    @if($quote->project_file)
                                        <a href="{{ asset('storage/' . $quote->project_file) }}" target="_blank" class="btn btn-sm btn-info">View File</a>
                                    @else
                                        <span class="text-muted">No file</span>
                                    @endif
                                </td>
                                <td>{{ $quote->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="#" class="action-btn btn-view" data-bs-toggle="modal" data-bs-target="#quoteModal{{ $quote->id }}">View Details</a>
                                </td>
                            </tr>

                            <!-- Modal for Details -->
                            <div class="modal fade" id="quoteModal{{ $quote->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Quote Request Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Name:</strong> {{ $quote->name }}</p>
                                            <p><strong>Email:</strong> {{ $quote->email }}</p>
                                            <p><strong>Phone:</strong> {{ $quote->phone }}</p>
                                            <p><strong>Service:</strong> {{ $quote->freight_type }}</p>
                                            <p><strong>Message:</strong></p>
                                            <p class="bg-light p-2 rounded">{{ $quote->message }}</p>
                                            
                                            @if($quote->project_file)
                                                <p><strong>Attachment:</strong></p>
                                                @if(pathinfo($quote->project_file, PATHINFO_EXTENSION) == 'pdf')
                                                    <a href="{{ asset('storage/' . $quote->project_file) }}" target="_blank" class="btn btn-primary">Open PDF</a>
                                                @else
                                                    <img src="{{ asset('storage/' . $quote->project_file) }}" style="max-width:100%; border-radius:5px;">
                                                @endif
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>