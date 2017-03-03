@extends('layouts.super-admin')

@section('nav-search') active @stop

@section('breadcrumb')
<li><a>Search</a></li>
@stop

@section('head-scripts')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
    html, body {
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 50px;
    }
</style>
@stop

@section('breadcrumb')
<li><a>Search</a></li>
@stop

@section('page-content-wrapper')
<form action="/search/results" method="get" id="form-search" class="hidden"></form>
<div class="row">
    <div class="col-md-12">

    <!-- START SEARCH -->                            
    <div class="panel panel-default" style="padding-top: 100px;">
        <div class="panel-body">                                    
            <div class="row stacked">
                <div class="col-md-12">
                    <div class="content"><span class="title">DOCUMENT ARCHIVING SYSTEM</span></div>
                    <div class="input-group push-down-10">
                        <span class="input-group-addon"><span class="fa fa-search"></span></span>
                        <input type="text" class="form-control" placeholder="Keywords..."/>
                        <div class="input-group-btn">
                            <button class="btn btn-primary" onclick="search()">Search</button>
                        </div>
                    </div>                                                                
                    
                    <div class="pull-right">
                        <div class="btn-group">
                            <button class="btn btn-default active" onclick="showFilter()"><span class="fa fa-search"></span> Advanced Search</button>
                            <button class="btn btn-default"><span class="fa fa-image"></span> Images</button>
                            <button class="btn btn-default"><span class="fa fa-file"></span> Docs</button>                              
                        </div>
                    </div>
            </div>
        </div> 
        <!-- STYLED CHECKBOX AND RADIO -->
        <div id="filter">
            <div class="form-group">
                <div class="col-md-4">    
                    <label for="branch">Branch: </label>                                
                    <select name="branch" class="btn btn-sm">
                        <option>Makati</option>
                        <option>Cebu</option>
                        <option>Davao</option>
                        <option>Ilo-Ilo</option>
                    </select>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Checked</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox"/> Default</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Checked</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox"/> Default</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Checked</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
                <div class="col-md-4">                                    
                    <label class="check"><input type="checkbox" class="icheckbox" /> Disabled</label>
                </div>
            </div>
        </div>
        <!-- END STYLED CHECKBOX AND RADIO --> 
    </div>
    <!-- END SEARCH -->

    </div>
</div> 
@stop

@section('scripts')
<script>
$("#filter").hide()

function showFilter() {
    if($("#filter").is(':visible')) {
        $("#filter").show();
        $("#filter").slideUp();
    }
    else $("#filter").slideDown();
}

function search() {
    $("#form-search").submit();
}
</script>
@stop