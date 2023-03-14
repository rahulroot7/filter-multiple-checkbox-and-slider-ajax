<html>
<body>
</body>
<div class="border-end">
    <div class="widget">
        <a class="ms-auto click collapsed" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0 ">Date Posted</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>
        <div class="collapse" id="dateposted" style="">
            <div class="widget-content">
                <div class="form-check">
                    <input type="checkbox" name="post_date" class="form-check-input single-check filter_job post_job" value="1hour" id="dateposted1">
                    <label class="form-check-label" name="post_date" for="dateposted1">Last hour</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input single-check filter_job post_job" value="1day" id="dateposted2">
                    <label class="form-check-label" name="post_date" for="dateposted2">Last 24 hour</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input single-check filter_job post_job" value="7day" id="dateposted3">
                    <label class="form-check-label" name="post_date" for="dateposted3">Last 7 days</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input single-check filter_job post_job" value="14day" id="dateposted4">
                    <label class="form-check-label" name="post_date" for="dateposted4">Last 14 days</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input single-check filter_job post_job" value="30day" id="dateposted5">
                    <label class="form-check-label" name="post_date" for="dateposted5">Last 30 days</label>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto  click collapsed" data-bs-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0 ">Job Type</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>
        <div class="collapse" id="jobtype" style="">
            <div class="widget-content">
                <div class="form-check fulltime-job">
                    <input type="checkbox" class="form-check-input filter_job job_type" value="full_time" id="jobtype1">
                    <label class="form-check-label" for="jobtype1">Full Time</label>
                </div>
                <div class="form-check parttime-job">
                    <input type="checkbox" class="form-check-input filter_job job_type" value="part_time" id="jobtype2">
                    <label class="form-check-label" for="jobtype2">Part-Time</label>
                </div>
                <div class="form-check freelance-job">
                    <input type="checkbox" class="form-check-input filter_job job_type" value="freelance" id="jobtype3">
                    <label class="form-check-label" for="jobtype3">Freelance</label>
                </div>
                <div class="form-check temporary-job">
                    <input type="checkbox" class="form-check-input filter_job job_type" value="temporary" id="jobtype4">
                    <label class="form-check-label" for="jobtype4">Temporary</label>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto text-dark  click collapsed" data-bs-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0">Experience (Yrs)</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>
        <div class="collapse" id="experience">
            <!-- Range slider starts here -->
            <div class="experience_slider_box my-4 px-2">
                <div class="multi-range-slider">
                    <input type="range" id="input-left" class="range2" min="0" max="10" value="0" onmousemove="rangeLeftSlider(this.value)">
                    <input type="range" id="input-right" class="range2" min="0" max="20" value="20" onmousemove="rangeRightSlider(this.value)">

                    <div class="slider">
                        <div class="track"></div>
                        <div class="range"></div>
                        <div class="thumb left"></div>
                        <div class="thumb right"></div>
                    </div>
                </div>
                <div id="multi_range">
                    <span id="range2LeftValue">0</span>
                    <span> ~ </span>
                    <span id="range2RightValue">20</span>
                </div>
            </div>
            <!-- Range slider ends here -->
        </div>
    </div>
    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto text-dark  click collapsed" data-bs-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary">
            <div class="widget-collapse widget-height justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0">Offered Monthly Salary</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>

        <div class="collapse" id="Offeredsalary">
            <div class="experience_slider_box my-4 px-2">
                <div class="multi-range-slider">
                    <input type="range" id="sallery-left" class="range2 salary_range min_salary" min="5" step="10" max="200" value="0" onmousemove="salleryLeftSlider(this.value)">

                    <input type="range" id="sallery-right" class="range2 salary_range max_salary" min="0" step="10" max="200" value="200" onmousemove="salleryRightSlider(this.value)">

                    <div class="slider_salary">
                        <div class="track_salary"></div>
                        <div class="range_salary"></div>
                        <div class="thumb left_salary"></div>
                        <div class="thumb right_salary"></div>
                    </div>
                </div>
                <div id="multi_range">
                    <span id="LeftValue">5k</span>
                    <span> ~ </span>
                    <span id="RightValue">200k</span>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto widget text-dark click collapsed" data-bs-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0">Gender</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
            <!-- </a> -->
        </a>
        <div class="collapse" id="gender">
            <div class="widget-content">
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input filter_job gender" value="male" id="gender1">
                    <label class="form-check-label user-prof" for="gender1">Male</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job gender" value="female" id="gender2">
                    <label class="form-check-label user-prof" for="gender2">Female</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job gender" value="both" id="gender3">
                    <label class="form-check-label user-prof" for="gender3">Any</label>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto text-dark click collapsed" data-bs-toggle="collapse" href="#qualification" role="button" aria-expanded="false" aria-controls="qualification">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0">Qualification</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>
        <div class="collapse" id="qualification">
            <div class="widget-content">
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input filter_job qualification" value="1" id="qualification1">
                    <label class="form-check-label user-prof" for="qualification1">Matriculation</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job qualification" value="2" id="qualification2">
                    <label class="form-check-label user-prof" for="qualification2">Intermediate</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job qualification" value="3" id="qualification3">
                    <label class="form-check-label user-prof" for="qualification3">Graduate</label>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-0">
    <div class="widget">
        <a class="ms-auto text-dark click collapsed" data-bs-toggle="collapse" href="#working_type" role="button" aria-expanded="false" aria-controls="working_type">
            <div class="widget-height widget-collapse justify-content-between">
                <h6 class="text-capitalize filter-font-size m-0">Working Type</h6>
                <i class="fas fa-chevron-up icon"></i>
            </div>
        </a>
        <div class="collapse" id="working_type">
            <div class="widget-content">
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input filter_job work_type" value="wfo" id="working_type_1">
                    <label class="form-check-label user-prof" for="working_type_1">Work From office</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job work_type" value="wfo" id="working_type_2">
                    <label class="form-check-label user-prof" for="working_type_2">Work From Home</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input filter_job work_type" value="field" id="working_type_3">
                    <label class="form-check-label user-prof" for="working_type_3">Field Jobs</label>
                </div>
            </div>
        </div>
    </div>
</div>
</html>


<script>
    $(document).ready(function() {

        filter_data();

        function filter_data() {
            var minimum_salary = get_min_salary('min_salary');
            var maximum_salary = get_max_salary('max_salary');
            var postDate = get_filter('post_job');
            var jobType = get_filter('job_type');
            var gender = get_filter('gender');
            var qualification = get_filter('qualification');
            var work_type = get_filter('work_type');
            $.ajax({
                type: "GET",
                url: "{{route('jobFilter')}}",
                data: {
                    minimum_salary: minimum_salary,
                    maximum_salary: maximum_salary,
                    postDate: postDate,
                    jobType: jobType,
                    gender: gender,
                    qualification: qualification,
                    work_type: work_type
                },
                success: function(data) {
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.filter_job').click(function() {
            filter_data();
        });

        $('.salary_range').on('change', function() {
            filter_data();
        });

        function get_min_salary(salary_min_range) {
            let val = $('.min_salary').val();
            return val;
        }

        function get_max_salary(salary_min_range) {
            let val = $('.max_salary').val();
            return val;
        }

    });
</script>
