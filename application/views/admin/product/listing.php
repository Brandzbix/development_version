<?php 
$this->load->view('admin/layouts/header',$title);
?>
<style type="text/css">
  .pagination {
   display: inline-block;
}

.pagination a {
   color: black;
   float: left;
   padding: 8px 16px;
   text-decoration: none;
   transition: background-color .3s;
   border: 1px solid #ddd;
   justify-content: center;

}
.pagination a:active{
   background-color: #192932;
   color:white;
}
</style>
<div class="row  border-bottom white-bg dashboard-header">
 <div class="col-lg-6">
  <h2>Active Product List</h2>        
</div>    
<div class="col-lg-4">
   <form method='post' action="<?php echo base_url();?>admin/product/index" >
     <div class="input-group">
      <input type="text" name="search" placeholder="Search" class="form-control" value='<?= $search ?>'>
      <span class="input-group-btn">
       <button type='submit' name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-search"></i></button> 
    </span>
 </div>
</form>
</div>
<div class="col-lg-2">
  <a href="<?php echo base_url().'admin/product/add'; ?>" class="btn  btn-md btn-success">Add Product</a>
</div>
</div>

<br/>
<?php 
if(!empty($this->session->flashdata('message'))): ?>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
        <?php echo $this->session->flashdata('message')['message']; ?>
     </div>
  </div>
</div>
<?php endif; ?>
<div class="row margin-top20">
  <div class="col-lg-12 col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-content2">
        <div  class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Serial No</th>
                <th>Image</th>
                <th>Prodcut Name</th>
                <th>Category</th>
                <th>Key ingredients</th>
                <th>Description</th>
                <th>Method of use</th>
                <th>Action</th>
             </tr>
          </thead>
          <tbody>
            <?php 
            $sno = $row+1;
            foreach($result as $key => $value):
             ?>
              <tr id="data-row">
                <td><?php echo $sno; ?></td>
                <td>
                  <img src="<?php echo base_url('assets/product-img/').$value['photobig'];?>" style="width: 100px; height: 100px;">
               </td>
               <td><?php echo $value['productname']; ?></td>
               <td><?php echo $value['category']; ?></td>
               <td><?php echo $value['composition']; ?></td>
               <td><?php echo $value['indications']; ?></td>
               <td><?php echo $value['dosage']; ?></td>

               <td>
                  <a href="<?php echo base_url().'admin/product/show/'.$value['product_id_pk'];?>" class="btn  btn-xs btn-info btn-block">Show</a>
                  <a href="<?php echo base_url().'admin/product/edit/'.$value['product_id_pk'];?>" class="btn btn-xs btn-success btn-block" target="_blank">Edit</a>
                   <a href="<?php echo base_url().'admin/product/delete/'.$value['product_id_pk'];?>" class="btn btn-xs btn-danger btn-block" target="_blank">Delete</a>
               </td>

            </tr>
            <?php 
            $sno++;
         endforeach;
         if(count($result) == 0){
          echo "<tr>";
          echo "<td colspan='3'>No record found.</td>";
          echo "</tr>";
       }
       ?>
    </tbody>
    <tfoot>
       <tr>
         <th>Serial No</th>
         <th>Image</th>
         <th>Seller Name</th>
         <th>Prodcut Name</th>
         <th>Category</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Status</th>
         <th>Action</th>
      </tfoot>
   </table>
</div>
<div class="pagination-wrapper text-center">
  <div class="pagination">
    <?= $pagination; ?>
 </div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/layouts/footer'); ?>