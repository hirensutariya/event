@extends('layouts.front')

@section('content')  
<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Constitution</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Constitution</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="why-choose-area why-choose-about pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-9">
                <div class="why-choose-content">
                    <div class="content">
                        <table width="850" cellpadding="0" cellspacing="0" border="0" style="margin-left:25" onmouseover="unibox( & quot; & quot; , 287, 453, & quot; & quot; )" height="250">
                            <tbody><tr>
                                    <td class="TDtxcontent">
                                        &nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="TDtxcontent" bordercolor="#0F5091" bordercolorlight="#0F5091" bordercolordark="#0F5091">
                                        <p align="center"><b><font face="Verdana" color="#518606">
                                                <a href="constitution.pdf" style="text-decoration: none">
                                                    <font color="#518606">Constitution </font></a></font></b>
                                            <a href="constitution.pdf" style="text-decoration: none">
                                                <font color="#518606">
                                                <img src="images/iconpdf.gif" width="18" height="13" border="0" alt="" align="absbottom"></font></a></p>
                                        <p align="center">&nbsp;</p>
                                        <p align="center"><b><font face="Verdana" color="#518606">
                                                <a href="constitution_amendments.pdf" style="text-decoration: none">
                                                    <font color="#518606">Constitution showing Amendments </font></a></font></b>
                                            <a href="constitution_amendments.pdf" style="text-decoration: none">
                                                <font color="#518606">
                                                <img src="images/iconpdf.gif" width="18" height="13" border="0" alt="" align="absbottom"></font></a></p>
                                        <p>&nbsp;</p></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection