<!-- views/projects/index.blade.php -->
@extends('layouts.app')
@section('header')
@include('pages.includes._main_nav')
@endsection
@section('content')
  <div class="row">
    <div class="small-12 columns artisan-banner">
      <h1>My Work</h1>
      <p>I'm skilled at HTML, CSS, JavaScript, PHP, Jquery &amp; MySQL, and willing to learn whatever it takes to build you the perfect website. Below is a sample of my work:</p>
    </div>
  </div>
  <ul class="projects">
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture1') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Lorem ipsum dolor sit.</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id doloribus voluptatem culpa. Neque cum voluptates illum numquam perspiciatis, ea temporibus.</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Optio?</li>
        <li>Eius!</li>
        <li>Omnis.</li>
        <li>Nesciunt?</li>
      </ul>
    </li>
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture2') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Mollitia hic molestiae magni!</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Dolor placeat nisi, praesentium inventore aliquid impedit saepe, odit repellendus. At deserunt repellendus iusto doloribus tempora eligendi voluptatibus dolor illo.</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Cum.</li>
        <li>Quasi.</li>
        <li>Enim.</li>
        <li>Similique.</li>
      </ul>
    </li>
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture3') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Est sit, alias possimus?</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Odio eum illo velit atque cumque eligendi harum accusantium tempore laborum, quibusdam? Laboriosam, saepe quos ab vitae ut dolorem aspernatur.</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Aperiam!</li>
        <li>Quaerat?</li>
        <li>Optio.</li>
        <li>Consequatur!</li>
      </ul>
    </li>
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture4') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Vitae deserunt quis velit.</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Veritatis ad, ducimus voluptate vitae ipsa praesentium excepturi omnis aliquam quia molestiae totam porro quibusdam harum dignissimos, iusto dicta ullam!</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Eaque.</li>
        <li>Minima?</li>
        <li>Nulla!</li>
        <li>Architecto?</li>
      </ul>
    </li>
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture5') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Minima, autem consequatur cupiditate!</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Mollitia, eveniet obcaecati tenetur modi adipisci sapiente alias eligendi quia fugiat dolore quaerat voluptatem neque. At dignissimos quis consequuntur, distinctio.</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Neque?</li>
        <li>Ipsa!</li>
        <li>Quas?</li>
        <li>Harum.</li>
      </ul>
    </li>
    <li class="small-12 medium-6 large-4 columns project-preview">
      <div class="project-preview-img"><img src="{!! url('http://lorempixel.com/400/300/abstract?picture6') !!}" alt=""></div>
      <div class="project-preview-header">
        <h3>Nostrum ipsam possimus facilis!</h3>
        <a href="">example.com</a>
      </div>
      <p class="project-preview-info">Rerum cum saepe iste, sint quia aliquid adipisci sit odit veniam quo assumenda inventore nesciunt minus modi repellendus ratione nisi.</p>
      <ul class="project-preview-tags">
        <li>Lorem.</li>
        <li>Ea.</li>
        <li>Amet.</li>
        <li>Omnis.</li>
        <li>Corporis?</li>
      </ul>
    </li>
  </ul>
@endsection
@section('footer')
  <div class="row">
    <hr>
    <div class="footer">
      <p class="copyright">&copy; {!! date('Y') !!} artisan.pw  All rights reserved.</p>
    </div>
  </div>
@endsection
