@extends('layouts.super-admin')

@section('nav-search') active @stop

@section('breadcrumb')
<li><a>Search</a></li>
<li><a>Results</a></li>
@stop

@section('page-content-wrapper')
<form action="/search" method="get" id="form-search" class="hidden"></form>
<div class="row">
    <div class="col-md-12">

        <!-- START SEARCH -->                            
        <div class="panel panel-default">
            <div class="panel-body">                                    
                <div class="row stacked">
                    <div class="col-md-12">
                        <div class="input-group push-down-10">
                            <span class="input-group-addon"><span class="fa fa-search"></span></span>
                            <input type="text" class="form-control" placeholder="Keywords..."/>
                            <div class="input-group-btn">
                                <button class="btn btn-primary" onclick="search()">Search</button>
                            </div>
                        </div>                                                                
                        
                        @if(session('search_results') != null) <span class="line-height-30">Search Results for <strong>Atlant admin template</strong> (3,877 results)</span> @endif
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

<!-- START SEARCH RESULT -->
<div class="col-md-12 search-results">

    <div class="sr-item">
        <a href="#" class="sr-item-title">Atlant - Responsive Bootstrap Admin Template</a>
        <div class="sr-item-link">http://aqvatarius.com/themes/atlant/</div>
        <p>Atlant – is a powerful admin template based on Bootstrap 3.2. Template is fully responsive and retina ready. In downloaded package you will find .less files, documentation, clean and commented source code. Atlant is easy to use and customize, also you will find lots of ready to use elements.</p>
        <p class="sr-item-links"><a href="#">Translate this page</a> - <a href="#">View cache</a> - <a href="#">Remove from search</a></p>
    </div> 
    
    <div class="sr-item">
        <div class="sr-item-title">Files available on request</div>
        <div class="sr-item-link">http://somelink.com/path/to/file/</div>
        
        <div class="hidden" id="toggle_links">
            <div class="sr-item-link">http://otherlink.com/file/here/</div>
            <div class="sr-item-link">http://somelink.com/path/to/file/</div>
            <div class="sr-item-link">http://otherlink.com/file/here/</div>
            <div class="sr-item-link">http://newlink.com/file/here/</div>
        </div>                                    
        <a href="#" class="toggle" data-toggle="toggle_links"><span class="fa fa-angle-up"></span> Toggle All</a>
        
        <p>Search Results for <strong>Atlant admin template</strong> in Files Store: <strong>75</strong>.</p>
        
        <div class="table-responsive push-up-10">
            <table class="table table-actions table-striped">
                <thead>                                            
                    <tr>
                        <th width="30">#</th>
                        <th>name</th>
                        <th width="100">size</th>
                        <th width="300">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">file_name_v1.1.zip</a></td>
                        <td>35.4 KB</td>
                        <td><button class="btn btn-info btn-sm"><span class="fa fa-save"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">otherDocument.doc</a></td>
                        <td>13.5 KB</td>
                        <td><button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> Preview</button> <button class="btn btn-info btn-sm"><span class="fa fa-save"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">pdf-document-presentation.pdf</a></td>
                        <td>535.4 KB</td>
                        <td><button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> Preview</button> <button class="btn btn-info btn-sm"><span class="fa fa-save"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

     <div class="sr-item">
        <div class="sr-item-title">Images available on request <a href="pages-gallery.html" class="btn btn-primary btn-rounded pull-right"><span class="fa fa-image"></span> Open gallery</a></div>                                    
        <div class="sr-item-link">Dashboard <span class="fa fa-angle-right"></span> Pages <span class="fa fa-angle-right"></span> Gallery</div>
        <p>Search Results for <strong>Atlant admin template</strong> in Gallery: <strong>195</strong> jpeg images.</p>
        <div class="row push-up-10">
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-1.jpg" class="img-responsive img-text"/>
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-2.jpg" class="img-responsive img-text"/>
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-3.jpg" class="img-responsive img-text"/>
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-4.jpg" class="img-responsive img-text"/>
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-5.jpg" class="img-responsive img-text"/>
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="assets/images/gallery/nature-6.jpg" class="img-responsive img-text"/>
            </div>                                        
        </div>
        <p class="sr-item-links"><a href="pages-gallery.html">More pictures on request <strong>Atlant admin template</strong></a></p>
    </div>

</div> 


<!-- END SEARCH RESULT -->
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