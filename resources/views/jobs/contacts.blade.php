@extends('layouts.app')

@section('content')

<div class="container">
        <div class="mb-3">
            <h2>Application Form</h2>
        </div>
            <div>
                <div class="alert alert-success" role="alert">
                       A simple success alert—check it out!
                </div>

                <form class="border rounded-3 p-5 m-4" style="background-color: #FBFBFB;">
                    <div class="mb-4">
                        <div class="mb-4">
                            <h3>Name</h3>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="" class="form-label small">Last Name</label>
                                <input type="text" class="form-control form-control-lg is-invalid"
                                style="background-color: #EEEEEE;">
                                <div id="validationServerFeedback" class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                            <div>
                                <label for="" class="form-label small">First Name</label>
                                <input type="text" class="form-control form-control-lg is-invalid"
                                style="background-color: #EEEEEE;">
                                <div id="validationServerFeedback" class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                            <div>
                                <label for="" class="form-label small">Middle Name</label>
                                <input type="text" class="form-control form-control-lg is-invalid"
                                style="background-color: #EEEEEE;">
                                <div id="validationServerFeedback" class="invalid-feedback">
                                    Middle name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="mb-4">
                            <h2>Current Address</h2>
                        </div>
                       <div class="mb-3">
                            <div class="form-text text-black ms-1 small mb-2">
                                Full Address
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control is-invalid" id="floatingAddress"
                                 style="background-color: #EEEEEE;" placeholder="House no., Street, Brgy., City">
                                <label for="floatingAddress">House no., Street, Brgy., City</label>
                                <div id="validationServerFeedback" class="invalid-feedback">
                                  Full Address is required
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="mb-4">
                    <div class="mb-4">
                        <h2>Contact Information</h2>
                    </div>
                        <div class="d-flex gap-3">
                            <div class="flex-fill">
                                <div class="form-text text-black ms-1 small mb-2">
                                  Email Address
                                 </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control is-invalid" id="email" placeholder="ex: name@gmail.com"
                                        style="background-color: #EEEEEE;">
                                    <label for="email" class="small">ex: name@gmail.com</label>
                                    <div id="validationServerFeedback" class="invalid-feedback">
                                       Email is required
                                    </div>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-text text-black ms-1 small mb-2">
                                Phone Number
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control is-invalid" id="phone" placeholder="09xxxxxxxxx"
                                        style="background-color: #EEEEEE;">
                                    <label for="phone" class="small">09xxxxxxxxx</label>
                                    <div id="validationServerFeedback" class="invalid-feedback">
                                     Phone number is required
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="mb-4">
                    <div class="mb-4">
                        <h2>Upload A Resume</h2>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                        <div class="d-flex flex-column align-items-center justify-content-center border-dashed rounded p-5 text-center"
                            style="background-color: #EEEEEE; width: 100%; cursor: pointer;"
                            onclick="document.getElementById('fileInput').click()">
                            <i class="bi bi-cloud-upload" style="font-size: 30px;"></i>
                            <span class="small text-black mt-2">Upload your resume here</span>
                        </div>
                        <input type="file" id="fileInput" class="d-none is-invalid">
                        <div id="validationServerFeedback" class="invalid-feedback">
                            Resume is required
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <span class="text-success">  Uploding . . . . . </span>
                </div>

                <div class="text-center">
                    <span class="text-success">  Sending . . . . . </span>
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" style="background-color: #213A5C; width: 40%;"
                    class="text-white p-2 rounded-2">Submit</button>
                </div>

            </form>
        </div>
</div>

@endsection
