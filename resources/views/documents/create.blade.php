@extends('layouts.super-admin')

@section('nav-add-document') active @stop

@section('breadcrumb')
<li><a>Documents</a></li>
<li><a>Create</a></li>
@stop

@section('page-content-wrapper')
 <div class="row">
    <div class="col-md-12">
        
        <form class="form-horizontal">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Add</strong> A Document</h3>
            </div>
            <div class="panel-body form-group-separated">
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Text Field</label>
                    <div class="col-md-6 col-xs-12">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control"/>
                        </div>                                            
                        <span class="help-block">This is sample of text field</span>
                    </div>
                </div>
                
                <div class="form-group">                                        
                    <label class="col-md-3 col-xs-12 control-label">Password</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" class="form-control"/>
                        </div>            
                        <span class="help-block">Password field sample</span>
                    </div>
                </div>
                
                <div class="form-group">                                        
                    <label class="col-md-3 col-xs-12 control-label">Datepicker</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            <input type="text" class="form-control datepicker" value="2015-11-01">                                            
                        </div>
                        <span class="help-block">Click on input field to get datepicker</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Textarea</label>
                    <div class="col-md-6 col-xs-12">                                            
                        <textarea class="form-control" rows="5"></textarea>
                        <span class="help-block">Default textarea field</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Tags</label>
                    <div class="col-md-6 col-xs-12">                                                                                            
                        <input type="text" class="tagsinput" value="First,Second,Third"/>
                        <span class="help-block">Default textarea field</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Select</label>
                    <div class="col-md-6 col-xs-12">                                                                                            
                        <select class="form-control select">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                        <span class="help-block">Select box example</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">File</label>
                    <div class="col-md-6 col-xs-12">                                                                                                                                        
                        <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                        <span class="help-block">Input type file</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Checkbox</label>
                    <div class="col-md-6 col-xs-12">                                                                                                                                        
                        <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                        <span class="help-block">Checkbox sample, easy to use</span>
                    </div>
                </div>

            </div>
            <div class="panel-footer">
                <button class="btn btn-default">Clear Form</button>                                    
                <button class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
        </form>
        
    </div>
</div>                    
@stop

@section('this-page-plugins')
<script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
<script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
@stop