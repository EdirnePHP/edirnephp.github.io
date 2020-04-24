<footer role="contentinfo" id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="footer-box border-bottom">
                    <h3 class="footer-heading">Hakkımızda</h3>
                    <p>Edirne'de PHP'ye gönül verenlerin birarada bulunduğu topluluk.</p>
                </div>

                <!--<h3 class="footer-heading">Subscribe</h3>
                <form action="#" class="form-subscribe">
                    <div class="field">
                        <input type="email" class="form-control" placeholder="hello@gmail.com">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </form>-->
                <div class="fh5co-spacer fh5co-spacer-sm"></div>

            </div>
            <div class="col-md-4 col-sm-6">
                <h3 class="footer-heading">Bağlantılar</h3>
                <div class="feature-item">
                    <div class="feature-icon">
                        <a href="https://github.com/EdirnePHP" target="_blank"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>&nbsp;
                        <a href="https://edirnephp.slack.com" target="_blank"><i class="fa fa-slack fa-3x" aria-hidden="true"></i></a>
                        <a href="#" target="_blank" data-toggle="modal" data-target="#btc"><i class="fa fa-bitcoin fa-3x" aria-hidden="true"></i></a>
                        <a href="mailto:info@edirnephp.org"><i class="fa fa-at fa-3x" aria-hidden="true"></i></a>
                        <a href="https://www.phpclasses.org/browse/country/tr/" target="_blank"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- <h3 class="footer-heading">Recent Blog</h3>
                 <ul class="footer-list">
                     <li><a href="#">Nobis odio nulla autem aliquam vitae doloremque.</a></li>
                     <li><a href="#">Consectetur adipisicing elit.</a></li>
                     <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                 </ul>-->

            </div>


            <div class="visible-sm clearfix"></div>





            <div class="col-md-4 col-sm-6 clearfix">

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a class="twitter-timeline" data-width="350" data-height="350" data-link-color="#2B7BB9" href="https://twitter.com/edirne_php">Tweets by edirne_php</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                        <!--<a class="twitter-timeline" href="https://twitter.com/edirnephp" data-widget-id="719163537818578944">Tweets by @edirnephp</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p class="text-center">
                        <small>&copy; <?=date("Y");?> | EdirnePHP </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- BTC -->
<div class="modal fade" id="btc" tabindex="-1" role="dialog" aria-labelledby="btcLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="btcLabel">Bitcoin</h4>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            </div>
            <div class="modal-body">
                <div class="input-group-append">
                </div>


                <div class="input-group">


                </div>
                <table>
                    <tr>
                        <td><input type="text" class="form-control" value="168oXUgGyLmAppEuPnv2WFoy4YzmhgSU8d" id="btc-val"/></td>
                        <td><button class="btn btn-primary" type="button" id="kopyala" onclick="copy();" >Kopyala</button></td>
                    </tr>
                </table>


                <br>

                <p style="text-align: center">
                    <img src="images/edirnephp-btc.png" align="center" alt="EdirnePHP BTC"/>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
