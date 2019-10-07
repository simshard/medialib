<fieldset>
  <div class="form-group">
    <label for="name">Product Name</label>
      <input required="required" name="name" type="text" id="name" class="form-control col-md-6 " >
   </div>

<div class="form-group">
  <label for="description">Short Description of  product</label>
   <textarea aria-describedby="sDescHelpBlock" rows="2" name="description" cols="50" id="description" class="form-control col-md-6"> </textarea>
    <small id="sDescHelpBlock" class="form-text text-muted">
 Please enter a  brief product description
</small>
</div>

<div class="form-group">
<label for="image">Product Image</label>

 <input name="image" type="file" class="form-control-file" id="image">
</div>


<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit"/>
 </div>
</fieldset>
