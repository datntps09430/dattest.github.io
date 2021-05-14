<head>
    <title>EXCEEDマンション</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        //Service Worker Offline when you not have Internet
        // Check Service Work are Supported
        //Authur : Nguyen Tan Dat
        // Date Build : 14-5-2020

        if ('serviceWorker' in navigator) {
            console.log('Service Worker Supported')
        }
    </script>
    <style>
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);
        @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);


        .font_logo {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: solid;
            position: relative;
            right: 730px;
            margin-top: 8px;
        }



        /* Use a media query to add a breakpoint at 800px: */
        @media screen and (max-width: 800px) {

            .font_logo {
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                text-decoration: solid;
                right: 120px;
                position: relative;
            }
        }

        .column {
            margin-bottom: 16px;
            padding: 0 8px;
            margin-top: 20px;

        }

        /* thiết lập chiều dài cột khi màn hình nhỏ hơn 650px*/
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;

            }
        }

        /* thêm shadow cho class card*/
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);


        }

        .num {
            background-color: #FEFEF7;
        }

        .num_AC {
            background-color: #F5F77B;
        }

        /* .button {
            margin-top: 20px;
            outline: 0;
            padding: 2px;
            text-align: center;
            cursor: pointer;

        } */

        * {
            box-sizing: border-box;
            font-size: 16px;
        }

        form table {
            width: 100%;
            border-collapse: collapse;
        }

        form table tr,
        form table td {
            border: 2px solid #72725F;
        }




        form table tr td li {
            height: 100%;
            list-style: none;
        }

        form table li {
            width: 100%;
            height: 100%;
            padding: 10px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #B7B7B7;
            border: 0;
            font-size: 16px;
        }

        form table li:focus {
            outline: none;
            background: #B7B7B7;
            color: #fff;
        }

        form table li:hover {
            background: #eee;
            transition: all .2s ease-in-out;
            box-shadow: 1px 1px 2px 3px gray;
            cursor: pointer;

        }

        form table input.operator {
            font-weight: 700;
            color: #fff;
            background: #ffcc00;
        }



        .inp {
            width: 100px;
        }

        .return {
            margin-right: 20px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            width: 80px;
        }

        .update {
            padding: 10px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            width: 80px;
        }

        .storage {
            margin-right: 20px;
        }

        .upload {
            margin-right: 20px;
        }

        file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }


        .file-upload-content {
            display: none;

        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }






        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        /* #tb_number{
       
            
        } */
        #table1 {
            display: none;
        }

        #snackbar {
            visibility: hidden;
            /* Hidden by default. Visible on click */
            min-width: 250px;
            /* Set a default minimum width */
            margin-left: -125px;
            /* Divide value of min-width by 2 */
            background-color: #333;
            /* Black background color */
            color: #fff;
            /* White text color */
            text-align: center;
            /* Centered text */
            border-radius: 2px;
            /* Rounded borders */
            padding: 16px;
            /* Padding */
            position: fixed;
            /* Sit on top of the screen */
            z-index: 1;
            /* Add a z-index if needed */
            left: 50%;
            /* Center the snackbar */
            bottom: 30px;
            /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible;
            /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
    </style>

</head>

<body>

    <div class="column">
        <div class="card" style="background-color: #f2f3f8 ;">
            <div class="container mt-4">
                <form method='post' action='<?php echo base_url("Home/index"); ?>'>
                    <nav class="navbar navbar-dark bg-dark" style="border-radius: 5px;">
                        <a class="navbar-brand" href="#">EXCEEDマンション</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" onclick="showModal()">History</a>
                            </div>
                        </div>
                    </nav>
                    <div class="mt-3 table-responsive">
                        <table class="table table-striped table-bordered table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-20p text-center">
                                        <select class="form-control">
                                            <option selected class="form-control">XX棟 <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></option>
                                            <option value="1">101</option>
                                            <option value="2">102</option>
                                            <option value="3">103</option>
                                            <option value="3">104</option>
                                            <option value="3">105</option>
                                            <option value="3">106</option>

                                        </select>
                                    </th>
                                    <th class="wd-lg-20p text-center"><input type="text" class="form-control" id="workOrderCompletedDate" placeholder="Select Date"></th>

                                    <th><label id="param_label">4</label> <label>/40完了</label></th>

                                </tr>
                            </thead>
                        </table>

                        <label class="form-control" for="info" style="text-align: center;margin-top: 10px;">105　鈴木　一郎　様</label>

                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                                <div class="card custom-card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <label id="test">05/04/2021</label>
                                            </div>
                                            <div class="col">
                                                <p>前回検針値</p>
                                            </div>
                                            <div class="col">
                                                <p id="wm_value">Value of Water Measure final</p>
                                            </div>
                                        </div>
                                        <hr size="4" width="100%%" align="center" color="gray">
                                        <div class="row">
                                            <div class="col">
                                                <label id="pre_value">Day Previous Value</label>
                                            </div>
                                            <div class="col">
                                                <p>今回検針値</p>
                                            </div>
                                            <div class="col">
                                                <input class="inp" type="textbox" id="result" readonly value="cm3" onclick="showKeyBoard()" />
                                            </div>
                                        </div>
                                        <hr size="4" width="100%%" align="center" color="gray">
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="col">
                                                <p>今回検針値</p>
                                            </div>
                                            <div class="col">
                                                <p id="wm_value">Value of Water Measure final</p>
                                            </div>
                                        </div>

                                        <!-- <form name="calculator"> -->


                                        <table id="table1">
                                            <tbody>
                                                <ul class="clearfix">
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="1">1</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="2">2</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="3">3</li>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="4">4</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="5">5</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="6">6</li>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="7">8</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="8">8</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="9">9</li>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num_AC" value="AC">CLR</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="0">0</li>
                                                        </td>
                                                        <td>
                                                            <li class="num_AC" value="CE">DEL</li>
                                                        </td>
                                                    </tr>
                                                </ul>

                                            </tbody>
                                        </table>
                                        <!-- </form> -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end config">
                        <p><img src="https://img.icons8.com/metro/52/000000/camera.png" style="margin-top: 5px;" class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" /></p>
                        <p> <img src="https://img.icons8.com/dotty/50/000000/gallery.png" style="margin-top: 8px; margin-right: 50px;" data-toggle="modal" data-target="#exampleModal"" /></p>
                        
                    <p><input class=" btn btn-primary " type='submit' name='submit' id=" updateData" value="中止" style="margin-top: 20px; padding: 10px;margin: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px;"></input> </p>
                        <p><input class="btn btn-primary" disabled type='submit' name='submit' id="updateData" value="登録" style="margin-top: 20px;padding: 10px;margin: 10px; padding-left: 20px; padding-right: 20px;border-radius: 10px;"></input> </p>
                    </div>
                </form>

            </div>

        </div>
        <div id="snackbar">Upload Successfully
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Image Manager</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" style="width: 100%;" />
                        <button type="button" onclick="removeUpload()" class="btn btn-primary">Remove <span class="image-title">Uploaded Image</span></button>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="loadData()">Save</button>
                </div>
            </div>
        </div>
    </div>



</body>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
<script>
    var result = "";

    $(document).ready(function() {
        $("li").click(function() {
            var input = $(this).attr("value");
            if (input != "AC" && input != "CE") {
                result += input;
                // $("#result").val(result);
            } else if (input == "AC") {
                result = "";
                // $("#result").val(result);
            } else if (input == "CE") {
                result = result.slice(0, -1);
                //$("#result").val(result);
            }
            $("#result").val(result);
        });




    });

    function loadData() {
        location.reload();
    }

    function showKeyBoard() {
        var x = document.getElementById("table1");
        if (x.style.display === "none") {
            $('#table1').show()
        } else {
            $('#table1').hide()
        }
    }

    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);


            };

            reader.readAsDataURL(input.files[0]);
            myFunction()
            checkKeyBoard();
        } else {
            removeUpload();

        }
    }

    function checkKeyBoard() {
        var x = document.getElementById("table1");
        if (x.style.display === "none") {
            $('#table1').show()
        } else {
            $('#table1').hide()
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        checkKeyBoard()

    }



    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }


    $("#workOrderCompletedDate").datepicker({
        autoclose: true,
        todayHighlight: true,
        changeYear: true,
        changeMonth: true,
        dateFormat: 'mm/dd/yy',
        minDate: new Date('01/01/1900'),
        maxDate: '+1Y'

    }).on("change", function() {
        var date = $("#workOrderCompletedDate").datepicker({
            dateFormat: 'dd,MM,yyyy'
        }).val();
        if (date !== null) { // if any date selected in datepicker
            document.getElementById("pre_value").innerHTML = date;
        } else {
            alert(1)
        }
    });
</script>
</body>

</html>