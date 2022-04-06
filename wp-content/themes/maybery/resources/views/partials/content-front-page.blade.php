
<?php
  $title = 'Getting Started';
  $content = 'A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers,
        as well as speed up development times.';
?>
<header class="header pt-5 pb-1">
  <div class="container">
      <h1 class="style-guide__title">{{$title}}</h1>
      <p>{{$content}}</p>
  </div>
</header>

<section class="style-guide pt-5">
 <div class="container">
   <h2>COLORS</h2>
   <hr>
   <ul class="style-guide__list">
     <li class="style-guide__list-item"></li>
     <li class="style-guide__list-item"></li>
     <li class="style-guide__list-item"></li>
     <li class="style-guide__list-item"></li>
   </ul>
 </div>
</section>


<section class="style-fonts pt-5">
  <div class="container">
    <h2>FONTS</h2>
    <hr>
  </div>
</section>

<section class="style-headers pt-5">
  <div class="container">
    <h2>TYPOGRAPHY</h2>
    <hr>
    <h1>Heading One H1</h1>
    <h2>Heading Two H2</h2>
    <h3>Heading Three H3</h3>
    <h4>Heading Four H4</h4>
    <h5>Heading Five H5</h5>
    <h6>Heading Six H6</h6>
    <div class="pt-2">
      <p>Aa - 400 merriweather 16px. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad voluptatum eaque. Optio ea aperiam nisi distinctio nemo repellat, voluptate fugiat. Quidem neque illum, blanditiis!

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero mollitia modi ad id quasi illo! Provident corporis unde inventore impedit vel, consequuntur hic eaque officia praesentium! Debitis doloribus fugiat eaque porro eveniet culpa possimus voluptatibus dolores, veritatis quis rem et modi exercitationem, excepturi, ex ratione iste aspernatur sint minus obcaecati illum voluptatum! Eum dicta eius aut qui quo, consectetur vel commodi nam illo facere, quam labore veritatis nihil saepe quisquam quia exercitationem eaque aliquam itaque laudantium quod. Dolorem, explicabo, dignissimos.</p>
    </div>
  </div>
</section>

<section class="style-buttons pt-5">
  <div class="container">
    <h2>BUTTONS</h2>
    <hr>
  </div>
  <button class="btn">Normal</button>

  <button class="btn btn-primary">Success</button>

  <button class="btn btn-schedule">Alert</button>

  <button class="btn btn-request-info">Outline</button>
</section>


<section class="style-hr pt-5">
  <div class="container">
    <h2>Hr</h2>
    <hr>
  </div>
</section>

<section class="style-list pt-5">
  <div class="container">
    <h2>List Definition</h2>
    <hr>

    <ul class="example">
      <li class="example__list">Description Name</li>
      <li class="example__list">Description Name</li>
      <li class="example__list">Description Name</li>
      <li class="example__list">Description Name</li>
    </ul>

    <ul class="example-without">
      <li class="example-example-without__list">Description Name</li>
      <li class="example-example-without__list">Description Name</li>
      <li class="example-example-without__list">Description Name</li>
      <li class="example-example-without__list">Description Name</li>
    </ul>

  </div>
</section>


<section class="style-order pt-5">
  <div class="container">
    <h2>List Ordered</h2>
    <hr>

    <ol class="example-ordered">
      <li class="example-order__list">List item 1
          <ol class="example-order__list-item">
            <li class="example-order__list-item__single-item">list item 2</li>
            <li class="example-order__list-item__single-item">list item 2</li>
          </ol>
      </li>
      <li class="example-order__list">List item 1</li>
      <li class="example-order__list">List item 1</li>
    </ol>

  </div>
</section>

<section class="style-form pt-5">
  <div class="container">
    <h2>Form</h2>
    <hr>
    <form action="">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Name" aria-describedby="namehelp">
        <div id="namehelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Password">
      </div>


     <div class="mt-4">
       <select class="form-select" aria-label="Default select example">
         <option selected>Open this select menu</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
       </select>
     </div>

      <div class="mb-3 form-check pt-4">
        <input type="checkbox" class="form-check-input">
        <label for="checkbox" class="form-check-label">Checkbox</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Default radio
        </label>
      </div>

    </form>
  </div>
</section>

<section class="card-area pt-5">
  <div class="container">
    <h2>CARDS</h2>
    <hr>
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-md-4">
        <div class="card">
          <div class="card__img">
            <img src="https://bedrocksagedev.wpengine.com/wp-content/uploads/2022/04/r-architecture-2gDwlIim3Uw-unsplash-scaled.jpg" alt="" class="card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 mb-md-4">
        <div class="card">
          <div class="card__img">
            <img src="https://bedrocksagedev.wpengine.com/wp-content/uploads/2022/04/r-architecture-2gDwlIim3Uw-unsplash-scaled.jpg" alt="" class="card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 mb-md-4">
        <div class="card">
          <div class="card__img">
            <img src="https://bedrocksagedev.wpengine.com/wp-content/uploads/2022/04/r-architecture-2gDwlIim3Uw-unsplash-scaled.jpg" alt="" class="card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="card-area pt-5">
  <div class="container">
    <h2>SINGLE CARD - CENTERED</h2>
    <hr>
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-md-4">
        <div class="card">
          <div class="card__img">
            <img src="https://bedrocksagedev.wpengine.com/wp-content/uploads/2022/04/r-architecture-2gDwlIim3Uw-unsplash-scaled.jpg" alt="" class="card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

