<?php
include '../connections/conn.php';
$sql = "SELECT username, email FROM customers"; // Select only username and email
$result = $conn->query($sql);
?>

<div class="card mt-4">
    <div class="card-body">
        <div class="customer-table">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">     
                        <tr>
                            <th style="width: 5%;"><input class="form-check-input" type="checkbox"></th>
                            <th style="width: 15%;">User ID</th>
                            <th style="width: 50%;">Customers</th>
                            <th style="width: 30%;">Email</th>  
                            <th style="width: 30%;">Actions</th> <!-- Added Actions column -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $output = '';
                        if ($result->num_rows > 0) {
                            $userId = 1; // Initialize User ID
                            while ($row = $result->fetch_assoc()) {
                                $output .= '<tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>' . $userId . '</td> <!-- Numeric User ID -->
                                    <td>
                                        <a class="d-flex align-items-center gap-3" href="javascript:;">
                                            <p class="mb-0 customer-name fw-bold">' . $row['username'] . '</p>
                                        </a>
                                    </td>
                                    <td><a href="javascript:;" class="font-text1">' . $row['email'] . '</a></td>
                                    <td class="text-center"> <!-- Centering the button -->
                                        <button type="button" class="btn btn-dark px-4 raised d-flex gap-2">
                                            <i class="material-icons-outlined">delete</i> Delete
                                        </button>
                                    </td>
                                </tr>';
                                $userId++; // Increment User ID
                            }
                        } else {
                            $output .= '<tr><td colspan="5" class="text-center">No results found</td></tr>'; // Updated colspan to 5
                        }
                        echo $output; // Single echo to display all rows
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap and Material Icons (if not already included in your project) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
