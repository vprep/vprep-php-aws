<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Test extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
 
		$this->load->library('image_lib');
	}	
	
  public function index_get()
  {
    // Display all books
  }

  public function index_post()
  {
    // Create a new book
  }
  
  
  public function overlay()
    {
		echo "a<br>";
        $config['image_library'] = 'gd2';
        $config['source_image'] = '/home/magento/public_html/webservice/upload_test/4.png';
        $config['wm_type'] = 'overlay';
        $config['wm_overlay_path'] = '/home/magento/public_html/webservice/upload_test/watermark.png';
        //the overlay image
        $config['wm_opacity'] = 50;
        $config['wm_vrt_alignment'] = 'middle';
        $config['wm_hor_alignment'] = 'center';
        $this->image_lib->initialize($config);
        if (!$this->image_lib->watermark()) {
            echo $this->image_lib->display_errors();
        } else {
            echo 'Successfully updated image with watermark';
        }
    }
	
public function dbbackup()
{
    $this->load->dbutil();   
    $backup =& $this->dbutil->backup();  
    $this->load->helper('file');
    write_file('<?php echo base_url();?>/downloads', $backup);
    $this->load->helper('download');
    force_download('mybackup.zip', $backup);
}


	
}
?>