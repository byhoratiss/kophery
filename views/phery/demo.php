<?php $mediabase = Route::url('media'); //echo $mediabase; ?>

<?php echo View::factory('phery/pheryinit') ?>

<h1>Kophery demo</h1>
<?php echo phery::link_to('A click on this link triggers Controller_PheryDemo::ph_testmethod function', 'testmethod', array('confirm' => 'Are you sure?', 'args' => array('hello' => 'This message is passed as data from the calling link!', 'more' => 'More phery data passed...'))); ?>
<hr />
<div id="target">This text in "target" div is going to be replaced!</div>



