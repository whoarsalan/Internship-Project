		<?php
include_once('header.php');
?>


<hr />
<div class="text text-success h3 center" align="center">College Admissions</div>
<hr  />
<section class="py-5 bg-light" id="scroll-contact">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-2"> </div>
                        <div class="col-lg-8">
                            <h2 class="fw-bolder">Search Admissions</h2>
                            
                            
        
        <hr>
        <form action="" method="POST">
    <select name="university" class="form-select" id="collegeName">
        <option value="">Select the College Name
        </option>
        <option value="JMI">JMI</option>
    </select>
            <hr />
    <select name="typ" id="jmicourse" class="form-select">
        <option value="">Select Course Type</option>
        <option value="Doctoral Programmes">Doctoral Programmes</option>
        <option value="Masters Programmes">Masters Programmes</option>
        <option value="Postgraduate Diploma Programmes">Postgraduate Diploma Programmes </option>
        <option value="Undergraduate Programmes">Undergraduate Programmes</option>
        <option value="Advanced Diploma Programmes">Advanced Diploma Programmes</option>
        <option value="Diploma Programmes">Diploma Programmes</option>
        <option value="Certificate Programmes">Certificate Programmes</option>
        <option value="School Programmes">School Programmes</option>
    </select>   
            <hr />
    <input type="submit" name="search" value="search" class="btn btn-success">   <input type="reset" value="Reset" class="btn btn-danger">
    </form>
                            <hr />
    <table class="table">
        <thead>
          <tr>
            <!-- <th scope="col">Couse Id</th> -->
            <!-- <th scope="col">Course Name</th> -->
            <!-- https://www.jmi.ac.in/ -->
          </tr>
        </thead>
        <tbody>
        
            <?php
$conn = mysqli_connect("localhost","root","","college") or die("Connection Failed");
if(isset($_POST['search']))
{
  $university=$_POST['university'];
  $typ= $_POST['typ'];
  $query = "SELECT * FROM collegedetail WHERE typ='$typ' AND university='$university' ";
  // $query = "SELECT * FROM masters WHERE typ='$typ' AND university='$university' ";
  $res= mysqli_query($conn,$query) or die("Query failed");
while($row = mysqli_fetch_assoc($res))
{       
  ?>    
          <tr>
            <td><a href=""><?php echo $row['cid']; ?></a></td>
            
            <td><a href="https://www.jmi.ac.in/" target="_blank"><?php echo $row['cname']; ?></a></td>
          </tr>
          <?php } ?>
          <?php } ?>
</body>
                            </table>             
                            
                        </div> 
                    <div class="col-lg-2"> </div>
                    </div>
    
    </div>
                </div>
            </section>

	<?php
include_once('footer.php');
?>