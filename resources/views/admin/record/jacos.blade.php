@extends('theme.layout')
@section('content')

<div class="container">
    <h5>LIST OF JOB ORDER/CONTRACT OF SERVICE/MOA PERSONNEL</h5>

    <div class="container" style="padding: 1rem; border: px solid #ddd; border-radius: 20px;">
        <div class="form-group" style="display: flex; gap: 1rem;">
            <div class="form-control-wrap" style="flex: 1;">
                <input type="text" class="form-control form-control-outlined" id="agency-name" placeholder="">
                <label class="form-label-outlined" for="agency-name">Agency Name:</label>
            </div>

            <div class="form-control-wrap" style="flex: 1;">
                <input type="text" class="form-control form-control-outlined" id="regional-office" placeholder="">
                <label class="form-label-outlined" for="regional-office">Regional Office No:</label>
            </div>

            <a href="#" class="btn btn-x2 btn-primary">Save</a>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <!-- Add Personnel Button -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPersonnelModal">
            Add Personnel
        </button>

        <!-- Import Personnel Button -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#importPersonnelModal">
            Import Personnel
        </button>
    </div>

    <!-- Modal for Adding Personnel -->
    <div class="modal fade" id="addPersonnelModal" tabindex="-1" aria-labelledby="addPersonnelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPersonnelModalLabel">Add Personnel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cosreps.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="employee-search">Employee Name:</label>
                            <input type="text" id="employee-search" class="form-control" placeholder="">
                            <div id="search-results" class="list-group mt-2" style="max-height: 200px; overflow-y: auto; display: none;"></div>
                            <input type="hidden" name="masterlist_id" id="selected-employee">
                        </div>
                        <div class="form-group mb-3">
                            <label for="date_of_birth">Date of Birth:</label>
                            <input type="date" name="date_of_birth" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Sex:</label>
                            <select name="gender" class="form-control" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="level_of_cs_eligibility">CS Eligibility:</label>
                            <select name="level_of_cs_eligibility" class="form-control" required>
                                <option value="1st level">1st level</option>
                                <option value="2nd level">2nd level</option>
                                <option value="3rd level">3rd level</option>
                                <option value="No Eligibility">No Eligibility</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="work_status">Work Status:</label>
                            <select name="work_status" class="form-control" required>
                                <option value="Job Order">Job Order</option>
                                <option value="Contract of Service">Contract of Service</option>
                                <option value="MOA Personnel">MOA Personnel</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="years_of_service">Years of Service:</label>
                            <input type="number" name="years_of_service" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nature_of_work">Nature of Work:</label>
                            <select name="nature_of_work" class="form-control" required>
                                <option value="Clerical services">Clerical services</option>
                                <option value="Health and allied services">Health and allied services</option>
                                <option value="IT services">IT services</option>
                                <option value="Janitorial services">Janitorial services</option>
                                <option value="Security services">Security services</option>
                                <option value="Teaching services">Teaching services</option>
                                <option value="Technical services">Technical services</option>
                                <option value="Trades and crafts/laborer">Trades and crafts/laborer</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="specific_nature_of_work">Specific Nature of Work:</label>
                            <input type="text" name="specific_nature_of_work" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Import Personnel -->
    <div class="modal fade" id="importPersonnelModal" tabindex="-1" aria-labelledby="importPersonnelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importPersonnelModalLabel">Import Personnel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="importFile">Upload File:</label>
                            <input type="file" name="importFile" id="importFile" class="form-control" accept=".csv, .xlsx">
                        </div>
                        <button type="submit" class="btn btn-secondary">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table -->
    <div class="table-responsive mt-3">
        <table class="datatable-init-export nowrap table" data-export-title="Export">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col"><span class="sub-text">#</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Surname</span></th>
                    <th class="nk-tb-col"><span class="sub-text">First Name</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Date of Birth</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Sex</span></th>
                    <th class="nk-tb-col"><span class="sub-text">CS Eligibility</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Work Status</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Years of Service</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Nature of Work</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Specific Work</span></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cosreps as $cosrep)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cosrep->masterlist->last_name }} </td>
                    <td>{{ $cosrep->masterlist->first_name }}</td>
                    <td>{{ $cosrep->date }}</td>
                    <td>{{ $cosrep->sex }}</td>
                    <td>{{ $cosrep->eligibility }}</td>
                    <td>{{ $cosrep->workstatus }}</td>
                    <td>{{ $cosrep->yearsofservice }}</td>
                    <td>{{ $cosrep->natureofwork }}</td>
                    <td>{{ $cosrep->specificnatureofwork }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('employee-search');
    const searchResults = document.getElementById('search-results');
    const selectedFullname = document.getElementById('selected-fullname');
    let typingTimer;

    if (!searchInput || !searchResults) return;

    searchInput.addEventListener('input', function() {
        clearTimeout(typingTimer);
        const query = this.value.trim();

        if (query.length < 2) {
            searchResults.style.display = 'none';
            return;
        }

        typingTimer = setTimeout(() => {
            fetch(`/contractuals/searchMasterlist?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    searchResults.innerHTML = '';
                    
                    if (data.length > 0) {
                        data.forEach(employees => {
                            const div = document.createElement('div');
                            div.className = 'list-group-item list-group-item-action';
                            div.innerHTML = `
                                <div><strong>${employees.first_name} ${employees.last_name}</strong></div>
                                <small class="text-muted">${employees.job_type} - ${employees.department}</small>
                            `;
                            div.addEventListener('click', () => {
                            const fullName = `${employees.first_name} ${employees.last_name}`;
                            searchInput.value = fullName;
                            document.getElementById('selected-employee').value = employees.id; // Set hidden input value
                            searchResults.style.display = 'none';
                        });
                            searchResults.appendChild(div);
                        });
                        searchResults.style.display = 'block';
                    } else {
                        searchResults.innerHTML = `
                            <div class="list-group-item text-danger">
                                No employee found in masterlist
                            </div>
                        `;
                        searchResults.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    searchResults.innerHTML = `
                        <div class="list-group-item text-danger">
                            Error searching for employee
                        </div>
                    `;
                    searchResults.style.display = 'block';
                });
        }, 300);
    });

    // Close the results dropdown immediately after clicking an employee's name
    searchResults.addEventListener('click', function(e) {
        const clickedItem = e.target.closest('.list-group-item');
        if (clickedItem) {
            searchResults.style.display = 'none'; // Close the dropdown immediately
        }
    });
});
</script>


@endsection