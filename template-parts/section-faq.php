<?php 
  $_faq_list = [
    "General" => [
      'Where do I find prices and availability?',
      'What if I want to add on upgrades later?',
      'What’s your style?',
      'What makes us the team for your events?',
      'Do you travel or where are you based out of?',
      'My venue requires Insurance, do you have Insurance?',
      'If we want to book you what is the process?',
      'If we book you and our schedule goes longer than expected, will you stay?',
      'What happens if I have to cancel my wedding date?',
      'Other than weddings, what do you photo-/videograph?',
      'What’s the turnaround time?',
      'How soon should we book you?',
      'Can we call you?'
    ],
    'Photo' => [
      'Do you offer the engagement session?',
      'Why do you recommend at least 8 hours of photography?',
      'Are my photos color-corrected?',
      'What are the benefits of having an associate photographer/videographer?',
      'Do the images come watermarked?',
      'Will I get a copy right?',
      'Do you make printed Photo Albums?',
      'Do I need a shot list?',
      'What do you mean by edited photos?',
      'Do you have a second Photographer/Videographer?'
    ],
    'Video' => [
      'Why do you recommend at least 8 hours of videography?',
      'Why do I need 2 cameras at my wedding?',
      'What is the purpose of a wireless microphone?',
      'What if we want to re-edit the video files?'
    ]
  ];
?>

<section class="faq-section">
  <div class="container-xl">
    <div class="row">
      <div class="section-header col-lg-4 d-flex flex-column pe-lg-0">
        <h2 class="section-title mb-0 d-flex flex-column">
          <small class="section-subtitle text-uppercase" data-aos="fade-right">FAQ</small>
          <span data-aos="fade-right" data-aos-delay=150>Have any questions?</span>
        </h2>
        <p class="mb-0" data-aos="fade-right" data-aos-delay=300>Answers to your most common questions so you feel confident in choosing us.</p>
        <div class="flex-grow-1">
          <div class="help-widget d-flex flex-column" data-aos="fade-right">
            <h3 class="widget-title mb-0">Need Help?</h3>
            <ul class="link-list list-unstyled mb-0 d-flex">
              <li>
                <a href="#">Chat with us</a>
              </li>
              <li>
                <a href="#">Contact us</a>
              </li>
            </ul>
          </div>
        </div>  
      </div>
      <div class="section-content col-lg-6 offset-lg-1 d-flex flex-column px-lg-0 position-relative">
        <?php foreach($_faq_list as $_category => $_faq_items): ?>
          <div class="faq-single-category d-flex flex-column">
            <h3 class="mb-0 category-title text-uppercase" data-aos="fade-left"><?= $_category ?></h3>
            <ul class="faq-list list-unstyled mb-0 d-flex flex-column" data-aos="fade-left" data-aos-delay="150">
              <?php foreach($_faq_items as $_k => $_v): ?>
                <li class="list-item d-flex flex-column">
                  <a class="faq-title accordion d-flex justify-content-between align-items-center <?= $_k === 0 ? 'open' : '' ?>" href="#">
                    <?= $_v ?>
                    <svg class="caret" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="_::before" data-name="&amp;::before" width="30" height="30" viewBox="0 0 30 30">
                      <defs>
                        <style>
                          .caret-arrow-bg {
                            fill: #b9af99;
                            fill-opacity: 0;
                          }
                        </style>
                      </defs>
                      <rect id="bg:transparent" class="caret-arrow-bg" width="30" height="30"/>
                      <image id="_::before-2" data-name="&amp;::before" x="9" y="11" width="13" height="8" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAICAYAAAAiJnXPAAAAeElEQVQYlYXNsQnCQAAF0GcQHMYl7CNuYHNLiAuIg1imshbJIkELezsrEQnmIFzu8Jf/8/izEIJCKnxyUzVpftnghcNkKaAeNFhgj+M/FMEbW3TYpXCMxmCNE1Y5GFEKrkP/yME5lgUQE2E7wHv/9MQFdQak8IzbFwwdILbbDihNAAAAAElFTkSuQmCC"/>
                    </svg>
                  </a>
                  <div class="faq-content panel">
                    <a href="#">Click here</a> or go to Investment/Contact us in the top navigation bar. We need just a few pieces of information so that we can provide you with accurate package prices and availability on your wedding date. On Investment page you also can browse the packages to select the one that best suits your needs.
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>  
      </div>
    </div>
    
  </div>
</section>