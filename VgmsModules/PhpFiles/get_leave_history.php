<?php
include 'connection.php';

if (isset($_GET['emp_id'])) {
    $emp_id = intval($_GET['emp_id']);

    $sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status FROM tbl_leaves WHERE applied_by = $emp_id ORDER BY applied_on DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
              <td class='align-middle ps-3 apply'>" . htmlspecialchars($row['applied_on']) . "</td>
              <td class='align-middle from'>" . htmlspecialchars($row['from_date']) . "</td>
              <td class='align-middle to'>" . htmlspecialchars($row['to_date']) . "</td>
              <td class='align-middle type'>" . htmlspecialchars($row['leave_type']) . "</td>
             <td class='align-middle proof'>
  <a href='../uploads/leavesProof/" . htmlspecialchars($row['document_name']) . "' target='_blank'>" . htmlspecialchars($row['document_name']) . "</a>
</td>

              <td class='align-middle payment text-end py-3 pe-3 status'>" . renderStatusBadge($row['status']) . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>No leave history found for this employee.</td></tr>";
    }
}


function renderStatusBadge($status)
{
    $status = strtolower($status);
    if ($status == 'approved') {
        return '<span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span>';
    } elseif ($status == 'rejected') {
        return '<span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span class="badge-label">Rejected</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span>';
    } else {
        return '<div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="fw-bold">In Review</span><span class="ms-1 fas fa-stream"></span></div>';
    }
}
