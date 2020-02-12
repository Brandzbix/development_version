<?php 
$this->load->view('admin/layouts/header');
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
	.morecontent span {
    display: none;
}
.morelink {
    /*display: block;*/
}
</style>
<div class="row  border-bottom white-bg dashboard-header">
	<div class="col-lg-6">
		<h2>News</h2>        
	</div>    
	<div class="col-lg-4">
		<form method='post' action="<?php echo base_url();?>admin/news/" >
			<div class="input-group">
				<input type="text" name="search" placeholder="Search" class="form-control" value='<?= $search ?>'>
				<span class="input-group-btn">
					<button type='submit' name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-search"></i></button> 
				</span>
			</div>
		</form>
	</div>
	<div class="col-lg-2">
		<button class="btn btn-primary"><a href="news/add" class="text-white">Add News</a></button>
	</div>
</div>
<br/>
<?php 
if(!empty($this->session->flashdata('message'))): ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
				<?php print_r($this->session->flashdata('message')['message']); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="row margin-top20">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<div  class="table-responsive">
					<table class="table table-bordered">
						<thead class="">
							<tr>
								<th>#</th>
								<th>Type</th>
								<th>Heading</th>
								<th>Discription</th>
								<th>Image</th>
								<th>Post Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$sno = $row+1;
							foreach($result as $key => $value): ?>
								<tr>
									<td><?php echo $sno; ?></td>
									<td><?php echo $value['news_type_name']; ?></td>
									<td><?php echo $value['news_heading']; ?></td>
									<td class="more"><?php echo $value['news_description']; ?></td>
						<td>
							<a href="#"><img src="<?php echo base_url().'assets/img/news/'.$value['news_picture']; ?>" width="186" height="186"></a>
						</td>
						<td><?php echo $value['create_date']; ?></td>
						<td>
							<a href="<?php echo base_url().'admin/news/show/'.$value['news_id_pk'];?>" class="btn  btn-xs btn-info btn-block">Show</a>
							<a href="<?php echo base_url().'admin/news/edit/'.$value['news_id_pk'];?>" class="btn btn-xs btn-success btn-block">Edit</a>
							<a href="<?php echo base_url().'admin/NewsController/destroy/',$value['news_id_pk'];?>" class="btn  btn-xs btn-danger btn-block">Delete</a>
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
<?php 
$this->load->view('admin/layouts/footer');
?>
<script type="text/javascript">
	$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 250;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses ">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink btn btn-info btn-xs">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle(500);
        $(this).prev().toggle(500);
        return false;
    });
});
</script>