<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Attendance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row g-3">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control datetimepicker" id="editDate" placeholder="Date" required
                                    type="text" placeholder="dd/mm/yyyy"
                                    data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                <label for="editDate">Date</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="editStatus" aria-label="Status">
                                    <option selected disabled>Choose status</option>
                                    <option>Present</option>
                                    <option>Absent</option>
                                    <option>Leave</option>
                                </select>
                                <label for="editStatus">Status</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="editMode" aria-label="Mode">
                                    <option selected disabled>Choose mode</option>
                                    <option>Work from Home</option>
                                    <option>Office</option>
                                </select>
                                <label for="editMode">Mode</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="time" class="form-control datetimepicker" id="editInTime"
                                    placeholder="Intime" type="text" placeholder="hour : minute"
                                    data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                                <label for="editInTime">In Time</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control datetimepicker" id="editOutTime" type="text"
                                    placeholder="hour : minute"
                                    data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                                <label for="editOutTime">Out Time</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="editOvertime" placeholder="Overtime">
                                <label for="editOvertime">Overtime (in hours)</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="editRemarks" aria-label="Remarks">
                                    <option selected disabled>Select remark</option>
                                    <option>Permission granted</option>
                                    <option>Medical Leave</option>
                                    <option>Official Work</option>
                                </select>
                                <label for="editRemarks">Remarks / Permissions</label>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>