<?php

include "../../PhpFiles/connection.php";

// Collect form data using POST
$salutation = $_POST['salutation'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$fathers_name = $_POST['father_name'];
$mothers_name = $_POST['mother_name'];
$marital_status = $_POST['marital_status'];
$spouse_name = $_POST['spouse_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$primary_phone_no = $_POST['primary_phone_no'];
$alternative_phone_no = $_POST['alternative_phone_no'];
$personal_email = $_POST['personal_email'];
$official_email = $_POST['official_email'];
$current_address = $_POST['current_address'];
$permanent_address = $_POST['permanent_address'];
$aadharcard_no = $_POST['aadharcard_no'];
$pancard_no = $_POST['pancard_no'];
$bank_name = $_POST['bank_name'];
$bank_acc_no = $_POST['bank_acc_no'];
$ifsc_code = $_POST['ifsc_code'];
$branch_name = $_POST['branch_name'];
$branch_address = $_POST['branch_address'];
$is_upi_id = $_POST['is_upi_id'];
$upi_id = $_POST['upi_id'];
$emergency_name = $_POST['emergency_name'];
$emergency_relationship = $_POST['emergency_relationship'];
$emergency_phone_no = $_POST['emergency_phone_no'];
$nominee_name = $_POST['nominee_name'];
$nominee_relationship = $_POST['nominee_relationship'];
$high_education_qualification = $_POST['high_education_qualification'];
$institute_name = $_POST['institute_name'];
$passing_year = $_POST['passing_year'];
$education_certificate_path = $_POST['education_certificate_path'];
$have_worked_previously = $_POST['have_worked_previously'];
$previous_employer_name = $_POST['previous_employer_name'];
$previous_job_role = $_POST['previous_job_role'];
$emp_period_start_date = $_POST['emp_period_start_date'];
$emp_period_end_date = $_POST['emp_period_end_date'];
$reason_leaving = $_POST['reason_leaving'];
$document_path = $_POST['document_path'];
$joining_date = $_POST['joining_date'];
$current_job_role = $_POST['current_job_role'];
$current_salary_ctc = $_POST['current_salary_ctc'];
$in_hand_salary = $_POST['in_hand_salary'];
$conveyance = $_POST['conveyance'];
$company_loan_advance = $_POST['company_loan_advance'];
$loan_amt_repayment = $_POST['loan_amt_repayment'];
$official_work_timing = $_POST['official_work_timing'];
$weekly_off_day = $_POST['weekly_off_day'];
$annual_leave_entitlement = $_POST['annual_leave_entitlement'];
$leave_application_process = $_POST['leave_application_process'];
$is_policy_agree = $_POST['is_policy_agree'];
$willing_for_docs = $_POST['willing_for_docs'];
$additional_comments = $_POST['additional_comments'];
$family = $_POST['family'];
$position = $_POST['position'];
$branch = $_POST['branch'];
$date_joined = $_POST['date_joined'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure password
$timestamp = date('Y-m-d H:i:s');

// Insert query
$sql = "INSERT INTO tbl_emp (
    salutation, f_name, m_name, l_name, father's_name, mother's_name,
    marital_status, spouse_name, date_of_birth, gender, primary_phone_no, alternative_phone_no,
    personal_email, official_email, current_address, permanent_address, aadharcard_no, pancard_no,
    bank_name, bank_acc_no, ifsc_code, branch_name, branch_address, is_upi_id, upi_id,
    emergency_name, emergency_relationship, emergency_phone_no,
    nominee_name, nominee_relationship, high_education_qualification, institute_name,
    passing_year, education_certificate_path, have_worked_previously, previous_employer_name,
    previous_job_role, emp_period_start_date, emp_period_end_date, reason_leaving,
    document_path, joining_date, current_job_role, current_salary_ctc, in_hand_salary,
    conveyance, company_loan_advance, loan_amt_repayment, official_work_timing,
    weekly_off_day, annual_leave_entitlement, leave_application_process,
    is_policy_agree, willing_for_docs, additional_comments, family, position,
    branch, date_joined, password, timestamp
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
    $salutation, $f_name, $m_name, $l_name, $fathers_name, $mothers_name,
    $marital_status, $spouse_name, $date_of_birth, $gender, $primary_phone_no, $alternative_phone_no,
    $personal_email, $official_email, $current_address, $permanent_address, $aadharcard_no, $pancard_no,
    $bank_name, $bank_acc_no, $ifsc_code, $branch_name, $branch_address, $is_upi_id, $upi_id,
    $emergency_name, $emergency_relationship, $emergency_phone_no,
    $nominee_name, $nominee_relationship, $high_education_qualification, $institute_name,
    $passing_year, $education_certificate_path, $have_worked_previously, $previous_employer_name,
    $previous_job_role, $emp_period_start_date, $emp_period_end_date, $reason_leaving,
    $document_path, $joining_date, $current_job_role, $current_salary_ctc, $in_hand_salary,
    $conveyance, $company_loan_advance, $loan_amt_repayment, $official_work_timing,
    $weekly_off_day, $annual_leave_entitlement, $leave_application_process,
    $is_policy_agree, $willing_for_docs, $additional_comments, $family, $position,
    $branch, $date_joined, $password, $timestamp
);

if ($stmt->execute()) {
    echo "Employee data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
