<div>
    <!-- Start Contact Area
        ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 wow fadeInUp address text-light">
                    <div class="address-items">
                        <div class="item">
                            <h4>Lokasi Kantor</h4>
                            <div class="info">
                                <p>Jl. Wadas III No. 59, Jaticempaka, Pondok Gede – Bekasi</p>
                            </div>
                        </div>
                        <div class="item">
                            <h4>Info Kontak</h4>
                            <div class="info">
                                <ul>
                                    <li>Phone: <span>(021) 855 08 930</span></li>
                                    <li>Fax: <span>(021) 855 08 930</span></li>
                                    <li>Email: <span>marketing@ome.co.id</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 wow fadeInLeft contact-form">
                    <h2>Butuh bantuan? <strong>Mari ajukan pertanyaan Anda</strong></h2>
                    @include('my_components.alert_success')
                    @if(isset($error))
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @elseif($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <form wire:submit.prevent="store" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" wire:model="name">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email" wire:model="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" wire:model="subject">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" wire:model="comment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Kirim Pesan <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                            <!-- Alert Message -->
{{--                            <div class="col-lg-12 alert-notification">--}}
{{--                                <div id="message" class="alert-msg"></div>--}}
{{--                            </div>--}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->
</div>
