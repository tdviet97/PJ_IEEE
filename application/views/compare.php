<div id="header">
    <h1><a href="dashboard.html">Maruti Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>    <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages-->

<!--top-Header-menu-->

<div id="content">
    <div id="content-header">
    </div>




    <div id="mergely-resizer">
        <div id="compare">

        </div>
        <hr>
    </div>




    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>So sánh 2 file pdf</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form id="uploadform" action="compare/getfile" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Tải lên file 1</label>
                                <div class="controls">
                                    <input name="icon" type="file" id = "pdf1" class="test" onchange="yourFunction()"/>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label">Tải lên file 2</label>
                                <div class="controls">
                                    <input name="icon2" type="file" id = "pdf2" class="test" onchange="yourFunction2()" />
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<div class="row-fluid">
    <div id="footer" class="span12"> UET-VNU <a href="skylab.vnu.edu.vn">Trịnh Việt Skylab</a> </div>
</div>