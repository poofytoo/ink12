<div class="moi">
  <svg height="10" width="10">

    <path 
      d="" 
      stroke="#666666"
      stroke-width="4" 
      stroke-dasharray="10,10"
      stroke-linecap="round"
      fill="none"/>

    <circle class="c1" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,1)" />
    <circle class="c2" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,1)" />
    <circle class="c3" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,1)" />
    <circle class="c4" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,1)" />

    <circle id="circle" r="8" cx="0" cy="0" stroke="#666666" stroke-width="4" fill="#2FC1C8" />

    <circle class="c1" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,0.1)" />
    <circle class="c2" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,0.1)" />
    <circle class="c3" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,0.1)" />
    <circle class="c4" cx="0" cy="0" r="8" stroke="#666666" stroke-width="4" fill="rgba(255,255,255,0.1)" />

    <animateMotion 
      xlink:href="#circle"
      begin="0s"
      fill="freeze"
      path=""
      calcMode="spline"
      keySplines="0.4, 0, 0.2, 1"
      keyTimes="0;1"
      dur="2.5s"
    />

  </svg>

  <div class="row">
    <div class="columns large-12">
      <h1>Model of Interaction</h1>
      <p class="moi-desc">
        Classroom Learning Partner employs this model of interaction in order to enhance the classrom experience for both students and teachers
      </p>
    </div>
  </div>

  <!-- Create Section -->

  <div class="create-group">
    <div class="row">
      <div class="columns large-12">
        <h2>Create</h2>
        <p class="section-desc">
          Using our tablet software, students create inscriptions via a variety of methods
        </p>
      </div>
    </div>

    <div class="row">
      <div class="columns large-4">
        <h3>Stamps</h3>
        <img src="css/moi_create_stamp.png" />
        <p>
          Students create their own <strong>replicable images</strong> by drawing on a “stamp”. Creating representations with multiple copies of identitcal groups can support students’ understanding of multiplicative relationships
        </p>
      </div>
      <div class="columns large-4">
        <h3>Array</h3>
        <img src="css/moi_create_array.png" />
        <p>
          Students create and <strong>manipulate arrays</strong> to help them solve multiplication and division problems. Arrays can be divided into regions, cut into smaller arrays, and snapped together.   
        </p>
      </div>
      <div class="columns large-4">
        <h3>Templates</h3>
        <img src="css/moi_create_templates.png" />
        <p>
          Students use a <strong>division template</strong> to help them represent and solve division problems. They snap in arrays that represent multiplication of factor pairs, and the division template keeps track of the accumulating size of the arrays, number of groups, and remainder. 
        </p>
      </div>
    </div>

    <div class="row">
      <div class="columns large-12">
        <a class="fancy-button see-more">Read More about the Tools</a>
      </div>
    </div>
  </div>

  <!-- Interpret Section -->

  <div class="interpret-group">
    <div class="row">
      <div class="columns large-12">
        <h2>Interpret</h2>
        <p class="section-desc">
          Artificial Intelligence techniques are used to interpret and group student work for class discussion
        </p>
      </div>
    </div>

    <div class="row">
      <div class="columns large-12 machine-int">
        <h3>Machine Interpretation</h3>
      </div>
    </div>
    <div class="row">
      <div class="columns large-6">
        <p>
          AI techniques can help teachers view and select student work for class discussion, an often overwhelming task. Answers involving stamps can be interpreted and grouped: After students enter how many things are counted on the stamps, CLP determines that both of these examples are correct representations for 7 groups of 5. 
        </p>
      </div>
      <div class="columns large-6 image-container">
        <img src="css/interpret_1.png" />
        <img src="css/interpret_2.png" />
      </div>
    </div>
    <div class="row">
      <div class="columns large-6">
        <p>
          The student’s process of creating a division template can be interpreted. This representation for 50 ÷ 6 is correct, but the student struggled with the concept of remainders, as shown by attempts to snap in arrays when only the remainder was left. 
        </p>
      </div>
      <div class="columns large-6 image-container">
        <img src="css/interpret_3.png" />
        <img src="css/interpret_4.png" />
      </div>
    </div>

  </div>

  <!-- Share Section -->

  <div class="share-group">
    <div class="row">
      <div class="columns large-12">
        <h2>Share</h2>
        <p class="section-desc">
          Using a progress panel, teachers know which pages students have submitted, and can anoymously annotate and select student work for class discussion
        </p>
      </div>
    </div>

    <div class="row">
      <div class="columns large-12 center-image-container">
        Image, Image
      </div>
    </div>

    <div class="row">
      <div class="columns large-6 image-container">
        <h3>Smart Sorting</h3>
        <p>
          Based on teacher tags or machine interpretation, the teacher can sort student work, e.g., according to “interestingness”, amount of help, or correctness.
        </p>
      </div>
      <div class="columns large-6 image-container">
        Image
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
$(function() {
  // Creating the MOI path
  startX = $('h1').width()/2;
  startY = 100

  // arc radius
  arcr = 70

  // vertical segment between moi and create
  v1 = 40

  // left wall
  l1 = -450

  // vertical segment within create
  v2 = $('.create-group').height() - 150;

  // right wall
  r1 = -l1

  // vertical segment within interpret
  v3 = $('.interpret-group').height() - 110;

  // segment 1, from moi to create
  s1 = 'M ' + startX + ' ' + startY;
  s1 += 'A ' + arcr + ' ' + arcr + ' 0 0 1 ' + (startX + arcr) + ' ' + (startY+arcr) + ' ';
  s1 += 'l 0 ' + v1 + ' ';
  s1 += 'A ' + arcr + ' ' + arcr + ' 0 0 1 ' + startX + ' ' + (startY+v1+arcr*2) + ' ';
  s1 += 'L ' + 0 + ' ' + (startY+v1+arcr*2);

  // segment 2, from create to interpret
  s2 = 'L ' + l1 + ' ' + (startY+v1+arcr*2);
  s2 += 'A ' + arcr + ' ' + arcr + ' 0 0 0 ' + (l1-arcr) + ' ' + (startY+v1+arcr*3);
  s2 += 'L ' + (l1-arcr) + ' ' + (startY+v1+arcr*3+v2);
  s2 += 'A ' + arcr + ' ' + arcr + ' 0 0 0 ' + (l1) + ' ' + (startY+v1+arcr*4+v2);
  s2 += 'L ' + 0 + ' ' + (startY+v1+arcr*4+v2);

  // segment 3, from interpret to share
  s3 = 'L ' + r1 + ' ' + (startY+v1+arcr*4+v2);
  s3 += 'A ' + arcr + ' ' + arcr + ' 0 0 1 ' + (r1+arcr) + ' ' + (startY+v1+arcr*5+v2);
  s3 += 'L ' + (r1+arcr) + ' ' + (startY+v1+arcr*5+v2+v3);
  s3 += 'A ' + arcr + ' ' + arcr + ' 0 0 1 ' + (r1) + ' ' + (startY+v1+arcr*6+v2+v3);
  s3 += 'L ' + 0 + ' ' + (startY+v1+arcr*6+v2+v3);

  p = s1 + s2 + s3

  $('path').attr('d', p)
  $('animateMotion').attr('path', s1)

  $('.c1').attr('cx', startX)
  $('.c1').attr('cy', startY)

  $('.c2').attr('cx', 0)
  $('.c2').attr('cy', (startY+v1+arcr*2))

  $('.c3').attr('cx', 0)
  $('.c3').attr('cy', (startY+v1+arcr*4+v2))

  $('.c4').attr('cx', 0)
  $('.c4').attr('cy', (startY+v1+arcr*6+v2+v3))

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll > 150) {
      $('animateMotion').attr('dur', '2.5s')
    } else {

    }
  });
});
</script>