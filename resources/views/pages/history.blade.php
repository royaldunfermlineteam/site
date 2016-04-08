@extends('templates.app')

@section('content')
    <section id="blog" class="container" style="background-image: url('images/paper_background.png');box-shadow: 0 0 8px 8px white inset;">
        <div class="center">
            <h2>Early History</h2>

        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">

                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">

                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <a href="early_history_503.html"><img src="images/Early Church.png" alt="Img" width="300px" height="180px" style="border: 1px solid black;border-radius: 10px; "></a>
                                        <h3 >503 		SCOTLAND - DUNFERMLINE'S - KINGS</h3>
                                        <p >
                                            Extracted from The Pictorial History of Scotland. A genealogical and chronological table of the Scoto-Irish kings from the year 503 to 843. From various sources the learned and industrious Chalmers has compiled following genealogical and chronological table fo the Scots kings during the dark era, extending from the settlement of Fergus, in 503, to the accession of Kenneth to the Pictish throne, - a period of 430 years.
                                            <br>
                                            <br>
                                             <a href="res/503.pdf" target="_blank" class="btn btn-primary" role="button">Please Click here For More Information.</a>
                                        </p>
                                    <br> <br>
                                    <a href="early_history_1060.html"><img src="images/AbbeyStages.png" alt="Img" width="300px" height="180px" style="border: 1px solid black;border-radius: 10px; "></a>
                                                    <h3 >1060		CULDEES	CHURCH OF THE HOLY TRINITY 	DUNFERMLINE	</h3>
                                                    <p >
                                                        Extracted from The Pictorial History of Scotland The Scottish Nation, by Skene and The Scottish Highlands extracted by Frank Adam. There was a similar foundation at Dunfermline. Of this the following account has been given by a writer of great research;- "The splendid abbey of Dunfermlin owed its inconsiderable foundation to Malcolm Ceamore; its completion to Alexander I, and its reform to David I.  The monastery of Dunfermlin was dedicated, like the other Culdean establishments, to the Holy Trinity. Here, the Culdees, with their abbot, discharged their usual duties, during several reigns; and David I, who lived much with Henry I, of England, upon his accession, introduced, among the Celtic Culdees, thirteen English monks from Canterbury."
                                                        <br>
                                                        <br>
                                                         <a href="res/1060.pdf" target="_blank" class="btn btn-primary" role="button">Please Click here For More Information.</a>
                                                    </p>
                                </div>
                            </div>
                        </div><!--/.blog-item-->






                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>

                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">


                    <div class="widget categories">
                        <h3>Please sign petition</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>CHANGE THIS LATER  </p>
                                    <div class="entry-meta small muted">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div><!--/.recent comments-->




                    <div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->


                </aside>

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
@endsection
