@extends('employee_theme.layout')
@section('content')

<div class="container">
    <h2 class="text-center">PERSONAL DATA SHEET</h2>
    
        <!-- PAGE 1-->
        <!-- Personal Information Section -->

        <h5>I. PERSONAL INFORMATION</h5>
        <table class="table table-bordered">
            <tbody>
                <!-- Surname, First Name -->
                <tr>
                    <td>2. Surname</td>
                    <td><input type="text" class="form-control" name="surname"></td>
                    <td>First Name</td>
                    <td><input type="text" class="form-control" name="first_name"></td>
                </tr>

                <!-- Middle Name, Name Extension -->
                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" class="form-control" name="middle_name"></td>
                    <td>Name Extension (Jr., Sr.)</td>
                    <td><input type="text" class="form-control" name="name_extension"></td>
                </tr>

                <!-- Date of Birth, Place of Birth -->
                <tr>
                    <td>3. Date of Birth</td>
                    <td><input type="date" class="form-control" name="date_of_birth"></td>
                    <td>4. Place of Birth</td>
                    <td><input type="text" class="form-control" name="place_of_birth"></td>
                </tr>

                <!-- Sex, Civil Status -->
                <tr>
                    <td>5. Sex</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Male"> Male
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Female"> Female
                        </div>
                    </td>
                    <td>6. Civil Status</td>
                    <td>
                        <select class="form-select" name="civil_status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </td>
                </tr>

                <!-- Height, Weight -->
                <tr>
                    <td>7. Height (m)</td>
                    <td><input type="text" class="form-control" name="height"></td>
                    <td>8. Weight (kg)</td>
                    <td><input type="text" class="form-control" name="weight"></td>
                </tr>

                <!-- Blood Type -->
                <tr>
                    <td>9. Blood Type</td>
                    <td><input type="text" class="form-control" name="blood_type"></td>
                </tr>

                <!-- GSIS, PAG-IBIG -->
                <tr>
                    <td>10. GSIS ID No.</td>
                    <td><input type="text" class="form-control" name="gsis_no"></td>
                    <td>11. PAG-IBIG ID No.</td>
                    <td><input type="text" class="form-control" name="pagibig_no"></td>
                </tr>

                <!-- PHILHEALTH, SSS -->
                <tr>
                    <td>12. PHILHEALTH No.</td>
                    <td><input type="text" class="form-control" name="philhealth_no"></td>
                    <td>13. SSS No.</td>
                    <td><input type="text" class="form-control" name="sss_no"></td>
                </tr>

                <!-- TIN, Agency Employee No. -->
                <tr>
                    <td>14. TIN No.</td>
                    <td><input type="text" class="form-control" name="tin_no"></td>
                    <td>15. Agency Employee No.</td>
                    <td><input type="text" class="form-control" name="agency_employee_no"></td>
                </tr>

                <!-- Citizenship -->
                <tr>
                    <td>16. Citizenship</td>
                    <td>
                        <select class="form-select" name="citizenship">
                            <option value="Filipino">Filipino</option>
                            <option value="Dual Citizenship">Dual Citizenship</option>
                        </select>
                    </td>
                    <td colspan="2">
                        If holder of dual citizenship:
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="citizenship_type" value="by birth"> By birth
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="citizenship_type" value="by naturalization"> By naturalization
                        </div>
                    </td>
                </tr>

                <!-- Residential Address -->
                <tr>
                    <td>17. Residential Address</td>
                    <td colspan="3">
                        <input type="text" class="form-control mb-2" name="residential_address" placeholder="House/Block/Lot No., Street, Subdivision/Village, Barangay, City/Municipality, Province">
                        <input type="text" class="form-control" name="residential_zip_code" placeholder="ZIP Code">
                    </td>
                </tr>

                <!-- Permanent Address -->
                <tr>
                    <td>18. Permanent Address</td>
                    <td colspan="3">
                        <input type="text" class="form-control mb-2" name="permanent_address" placeholder="House/Block/Lot No., Street, Subdivision/Village, Barangay, City/Municipality, Province">
                        <input type="text" class="form-control" name="permanent_zip_code" placeholder="ZIP Code">
                    </td>
                </tr>

                <!-- Contact Information -->
                <tr>
                    <td>19. Telephone No.</td>
                    <td><input type="text" class="form-control" name="telephone_no"></td>
                    <td>20. Mobile No.</td>
                    <td><input type="text" class="form-control" name="mobile_no"></td>
                </tr>

                <!-- Email -->
                <tr>
                    <td>21. E-mail Address</td>
                    <td colspan="3"><input type="email" class="form-control" name="email"></td>
                </tr>
            </tbody>
        </table>
 

        <!-- Family Background -->
        <h5>II. Family Background</h5>
        <table class="table table-bordered">
            <tbody>
                <!-- Spouse Information -->
                <tr>
                    <td>22. Spouse's Surname</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_surname"></td>
                </tr>
                <tr>
                    <td>Spouse's First Name</td>
                    <td><input type="text" class="form-control" name="spouse_first_name"></td>
                    <td>Name Extension (Jr., Sr.)</td>
                    <td><input type="text" class="form-control" name="spouse_name_extension"></td>
                </tr>
                <tr>
                    <td>Spouse's Middle Name</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_middle_name"></td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_occupation"></td>
                </tr>
                <tr>
                    <td>Employer/Business Name</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_employer"></td>
                </tr>
                <tr>
                    <td>Business Address</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_business_address"></td>
                </tr>
                <tr>
                    <td>Telephone No.</td>
                    <td colspan="3"><input type="text" class="form-control" name="spouse_telephone"></td>
                </tr>

                <!-- Children Information -->

                <!-- NO FUNCTIONS REMOVE --> 
                <tr>
    <th colspan="2">23. Name of Children (Write full name and list all)</th>
    <th colspan="2">Date of Birth (mm/dd/yyyy)</th>
</tr>
<tbody id="childrenTable">
    <tr>
        <td colspan="2"><input type="text" class="form-control" name="children[0][name]" placeholder="Child's full name"></td>
        <td colspan="2"><input type="date" class="form-control" name="children[0][dob]"></td>
        <td><button type="button" class="btn btn-danger" onclick="removeChild(this)">Remove</button></td>
    </tr>
</tbody>
<tr>
    <td colspan="4"><button type="button" class="btn btn-primary" onclick="addChild()">Add Another Child</button></td>
</tr>

    <script>
    let childCount = 1; // Start with 1 child already in the table
    
    function addChild() {
        const table = document.getElementById('childrenTable');
        const newRow = document.createElement('tr');
    
        newRow.innerHTML = `
            <td colspan="2"><input type="text" class="form-control" name="children[${childCount}][name]" placeholder="Child's full name"></td>
            <td colspan="2"><input type="date" class="form-control" name="children[${childCount}][dob]"></td>
            <td><button type="button" class="btn btn-danger" onclick="removeChild(this)">Remove</button></td>
        `;
    
        table.appendChild(newRow);
        childCount++; // Increment the count for the next child
    }
    
    function removeChild(button) {
        const row = button.closest('tr'); // Get the row of the button
        row.remove(); // Remove the row from the table
    }
    </script>

                
                <!-- Father's Information -->
                <tr>
                    <td>24. Father's Surname</td>
                    <td colspan="3"><input type="text" class="form-control" name="father_surname"></td>
                </tr>
                <tr>
                    <td>Father's First Name</td>
                    <td><input type="text" class="form-control" name="father_first_name"></td>
                    <td>Name Extension (Jr., Sr.)</td>
                    <td><input type="text" class="form-control" name="father_name_extension"></td>
                </tr>
                <tr>
                    <td>Father's Middle Name</td>
                    <td colspan="3"><input type="text" class="form-control" name="father_middle_name"></td>
                </tr>

                <!-- Mother's Information -->
                <tr>
                    <td>25. Mother's Maiden Name</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Mother's Surname</td>
                    <td colspan="3"><input type="text" class="form-control" name="mother_surname"></td>
                </tr>
                <tr>
                    <td>Mother's First Name</td>
                    <td colspan="3"><input type="text" class="form-control" name="mother_first_name"></td>
                </tr>
                <tr>
                    <td>Mother's Middle Name</td>
                    <td colspan="3"><input type="text" class="form-control" name="mother_middle_name"></td>
                </tr>
            </tbody>
        </table>

        <!-- Educational Background -->
        
        <h5>III. Educational Background</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Level</th>
                    <th>Name of School (Write in full)</th>
                    <th>Basic Education/Degree/Course (Write in full)</th>
                    <th>Period of Attendance</th>
                    <th>Highest Level/Units Earned (if not graduated)</th>
                    <th>Year Graduated</th>
                    <th>Scholarship/Academic Honors Received</th>
                </tr>
            </thead>
            <tbody>
                <!-- Elementary -->
                <tr>
                    <td>Elementary</td>
                    <td><input type="text" class="form-control" name="elementary_school"></td>
                    <td><input type="text" class="form-control" name="elementary_degree"></td>
                    <td>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" name="elementary_from" placeholder="From">
                            <input type="text" class="form-control" name="elementary_to" placeholder="To">
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="elementary_highest_level"></td>
                    <td><input type="text" class="form-control" name="elementary_year_graduated"></td>
                    <td><input type="text" class="form-control" name="elementary_honors"></td>
                </tr>

                <!-- Secondary -->
                <tr>
                    <td>Secondary</td>
                    <td><input type="text" class="form-control" name="secondary_school"></td>
                    <td><input type="text" class="form-control" name="secondary_degree"></td>
                    <td>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" name="secondary_from" placeholder="From">
                            <input type="text" class="form-control" name="secondary_to" placeholder="To">
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="secondary_highest_level"></td>
                    <td><input type="text" class="form-control" name="secondary_year_graduated"></td>
                    <td><input type="text" class="form-control" name="secondary_honors"></td>
                </tr>

                <!-- Vocational/Trade Course -->
                <tr>
                    <td>Vocational/Trade Course</td>
                    <td><input type="text" class="form-control" name="vocational_school"></td>
                    <td><input type="text" class="form-control" name="vocational_degree"></td>
                    <td>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" name="vocational_from" placeholder="From">
                            <input type="text" class="form-control" name="vocational_to" placeholder="To">
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="vocational_highest_level"></td>
                    <td><input type="text" class="form-control" name="vocational_year_graduated"></td>
                    <td><input type="text" class="form-control" name="vocational_honors"></td>
                </tr>

                <!-- College -->
                <tr>
                    <td>College</td>
                    <td><input type="text" class="form-control" name="college_school"></td>
                    <td><input type="text" class="form-control" name="college_degree"></td>
                    <td>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" name="college_from" placeholder="From">
                            <input type="text" class="form-control" name="college_to" placeholder="To">
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="college_highest_level"></td>
                    <td><input type="text" class="form-control" name="college_year_graduated"></td>
                    <td><input type="text" class="form-control" name="college_honors"></td>
                </tr>

                <!-- Graduate Studies -->
                <tr>
                    <td>Graduate Studies</td>
                    <td><input type="text" class="form-control" name="graduate_school"></td>
                    <td><input type="text" class="form-control" name="graduate_degree"></td>
                    <td>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" name="graduate_from" placeholder="From">
                            <input type="text" class="form-control" name="graduate_to" placeholder="To">
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="graduate_highest_level"></td>
                    <td><input type="text" class="form-control" name="graduate_year_graduated"></td>
                    <td><input type="text" class="form-control" name="graduate_honors"></td>
                </tr>
            </tbody>
        </table>

        <!-- PAGE2 -->
        <!-- Civil Service Eligibility -->
        <h5>IV. Civil Service Eligibility</h5>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Eligibility</th>
                    <th>Rating</th>
                    <th>Date of Examination</th>
                    <th>Place of Examination/Conferment</th>
                    <th>License Number</th>
                    <th>Date of Release</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 1; $i++)
                    <tr>
                        <td>
                            <input type="text" name="eligibility[]" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="rating[]" class="form-control">
                        </td>
                        <td>
                            <input type="date" name="exam_date[]" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="exam_place[]" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="license_number[]" class="form-control">
                        </td>
                        <td>
                            <input type="date" name="release_date[]" class="form-control">
                        </td>
                    </tr>
                @endfor
            </tbody> 
        </table>

        <!-- Work Experience Section -->
        <h5>V. Work Experience</h5>

<table id="ExperienceTable" class="table table-bordered">
    <thead>
        <tr>
            <th>Inclusive Dates</th>
            <th>Position Title</th>
            <th>Department</th>
            <th>Monthly Salary</th>
            <th>Salary Grade</th>
            <th>Status of Appointment</th>
            <th>Gov't Service</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="date" class="form-control" name="inclusive_dates[]" placeholder="dd/mm/yyyy" /></td>
            <td><input type="text" class="form-control" name="position_title[]" placeholder="Position Title" /></td>
            <td><input type="text" class="form-control" name="department[]" placeholder="Department" /></td>
            <td><input type="text" class="form-control" name="monthly_salary[]" placeholder="Monthly Salary" /></td>
            <td><input type="text" class="form-control" name="salary_grade[]" placeholder="Salary Grade" /></td>
            <td><input type="text" class="form-control" name="status_of_appointment[]" placeholder="Status of Appointment" /></td>
            <td><input type="text" class="form-control" name="gov_service[]" placeholder="Gov't Service" /></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        </tr>
    </tbody>
</table>

<button type="button" class="btn btn-primary mt-3" onclick="addWork()">Add another work experience</button>

<script>
    let experienceCount = 1; // Start with 1 experience already in the table

    function addWork() {
        const table = document.getElementById('ExperienceTable').getElementsByTagName('tbody')[0];
        const newRow = document.createElement('tr');
        
        
        newRow.innerHTML = `
            <td><input type="date" class="form-control" name="inclusive_dates[]" placeholder="dd/mm/yyyy"></td>
            <td><input type="text" class="form-control" name="position_title[]" placeholder="Position Title"></td>
            <td><input type="text" class="form-control" name="department[]" placeholder="Department"></td>
            <td><input type="text" class="form-control" name="monthly_salary[]" placeholder="Monthly Salary"></td>
            <td><input type="text" class="form-control" name="salary_grade[]" placeholder="Salary Grade"></td>
            <td><input type="text" class="form-control" name="status_of_appointment[]" placeholder="Status of Appointment"></td>
            <td><input type="text" class="form-control" name="gov_service[]" placeholder="Gov't Service"></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        `;

        table.appendChild(newRow);
        experienceCount++;
    }

    // Event delegation for dynamically created rows
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
        }
    });
</script>

        <!--PAGE 3-->
        
        <h5>VI. Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organizations</h5>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name & Address of Organization (Write in full)</th>
            <th>Inclusive Dates (mm/dd/yyyy)</th>
            <th>Number of Hours</th>
            <th>Position / Nature of Work</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="VoluntaryTable">
        <tr>
            <td>
                <input type="text" name="organization_name[]" class="form-control" placeholder="Name of Organization">
                <input type="text" name="organization_address[]" class="form-control mt-2" placeholder="Address of Organization">
            </td>
            <td>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" name="from_date[]" class="form-control" placeholder="From">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="to_date[]" class="form-control" placeholder="To">
                    </div>
                </div>
            </td>
            <td>
                <input type="number" name="number_of_hours[]" class="form-control" placeholder="Number of Hours">
            </td>
            <td>
                <input type="text" name="position[]" class="form-control" placeholder="Position / Nature of Work">
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-row">Remove</button>
            </td>
        </tr>
    </tbody>
</table>
<button type="button" class="btn btn-primary" onclick="addVoluntary()">Add Row</button>

<script>
    function addVoluntary() {
        const table = document.getElementById('VoluntaryTable');
        const newRow = document.createElement('tr');
        
        newRow.innerHTML = `
            <td>
                <input type="text" name="organization_name[]" class="form-control" placeholder="Name of Organization">
                <input type="text" name="organization_address[]" class="form-control mt-2" placeholder="Address of Organization">
            </td>
            <td>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" name="from_date[]" class="form-control" placeholder="From">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="to_date[]" class="form-control" placeholder="To">
                    </div>
                </div>
            </td>
            <td>
                <input type="number" name="number_of_hours[]" class="form-control" placeholder="Number of Hours">
            </td>
            <td>
                <input type="text" name="position[]" class="form-control" placeholder="Position / Nature of Work">
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-row">Remove</button>
            </td>
        `;
        
        table.appendChild(newRow);
    }

    // Use event delegation to handle row removal
    document.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
        }
    });
</script>


    <!--VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED-->

<h5>VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h5>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title of Learning and Development Interventions/Training Programs</th>
            <th>Inclusive Dates of Attendance (mm/dd/yyyy)</th>
            <th>Number of Hours</th>
            <th>Type of LD (Managerial/Supervisory/Technical/etc.)</th>
            <th>Conducted/Sponsored By</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="LearningTable">
        <tr>
            <td><input type="text" name="title[]" class="form-control" placeholder="Title of Learning and Development"></td>
            <td>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" name="from_date[]" class="form-control" placeholder="From">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="to_date[]" class="form-control" placeholder="To">
                    </div>
                </div>
            </td>
            <td><input type="number" name="number_of_hours[]" class="form-control" placeholder="Number of Hours"></td>
            <td><input type="text" name="type_of_ld[]" class="form-control" placeholder="Type of LD (Managerial/ Supervisory/ Technical/etc.)"></td>
            <td><input type="text" name="conducted_by[]" class="form-control" placeholder="Conducted/Sponsored By"></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        </tr>
    </tbody>
</table>

<!-- Button to add more rows -->
<button type="button" class="btn btn-primary mt-3" onclick="addLearningRow()">Add Row</button>

<script>
    function addLearningRow() {
        const table = document.getElementById('LearningTable');
        const newRow = document.createElement('tr');
        
        newRow.innerHTML = `
            <td><input type="text" name="title[]" class="form-control" placeholder="Title of Learning and Development"></td>
            <td>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" name="from_date[]" class="form-control" placeholder="From">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="to_date[]" class="form-control" placeholder="To">
                    </div>
                </div>
            </td>
            <td><input type="number" name="number_of_hours[]" class="form-control" placeholder="Number of Hours"></td>
            <td><input type="text" name="type_of_ld[]" class="form-control" placeholder="Type of LD (Managerial/ Supervisory/ Technical/etc.)"></td>
            <td><input type="text" name="conducted_by[]" class="form-control" placeholder="Conducted/Sponsored By"></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        `;
        
        table.appendChild(newRow);
    }

    // Event delegation for dynamically created "Remove" buttons
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
        }
    });
</script>

    <!-- OTHER INFORMATION	 -->
    <h5>VIII. OTHER INFORMATION</h5>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Special Skills and Hobbies</th>
            <th>Non-Academic Distinctions / Recognition (Write in full)</th>
            <th>Membership in Association/Organization (Write in full)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="OtherInfoTable">
        <tr>
            <td><input type="text" name="special_skills[]" class="form-control" placeholder="Special Skills and Hobbies"></td>
            <td><input type="text" name="distinctions[]" class="form-control" placeholder="Non-Academic Distinctions / Recognition"></td>
            <td><input type="text" name="membership[]" class="form-control" placeholder="Membership in Association/Organization"></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        </tr>
    </tbody>
</table>

<!-- Button to add more rows -->
<button type="button" class="btn btn-primary mt-3" onclick="addOtherInfoRow()">Add Row</button>

<!-- Submit Button -->
<button type="submit" class="btn btn-primary mt-3">Submit</button>

<script>
    function addOtherInfoRow() {
        const table = document.getElementById('OtherInfoTable');
        const newRow = document.createElement('tr');
        
        newRow.innerHTML = `
            <td><input type="text" name="special_skills[]" class="form-control" placeholder="Special Skills and Hobbies"></td>
            <td><input type="text" name="distinctions[]" class="form-control" placeholder="Non-Academic Distinctions / Recognition"></td>
            <td><input type="text" name="membership[]" class="form-control" placeholder="Membership in Association/Organization"></td>
            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
        `;
        
        table.appendChild(newRow);
    }

    // Event delegation for dynamically created "Remove" buttons
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
        }
    });
</script>


                
@endsection


