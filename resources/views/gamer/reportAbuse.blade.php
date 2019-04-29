@extends('layouts.gamer.app')
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-header">
                        <h1 class="profile-title text-left">Report Abuse</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Your Complaint:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="AR_TEXT">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info btn-round" type="submit">
                                <i class="tim-icons icon-send"></i> Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('title')
Report Abuse
@endsection