	<div class="navbar navbar-fixed-bottom">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li><a href="<?=site_url();?>">Funbox</a></li>
				</ul>
				<ul class="nav pull-right">
					<li><a href="#">&copy; 2012, Funbox Pty Ltd</a></li>
				</ul>
			</div>
		</div>
	</div>
	hello
	<script type="text/javascript" src="/js/jquery1.7.2.js"></script>
	<script type="text/javascript" src="/js/bootstrap-dropdown.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.7.3.custom.min.js"></script>
	<script type="text/javascript" src="/js/datepicker.js"></script>
	<script type="text/javascript" src="/js/pagination.js"></script>
  </body>
</html>



	function __construct()
	{
        parent::__construct();
	}
	
	function index()
	{
		// Removing pagination options
		$this->session->unset_userdata('per_page_users');
		$this->session->unset_userdata('per_page_creatives');
		$this->session->unset_userdata('per_page_reports');
		$this->session->unset_userdata('per_page_advertisers');
		$this->session->unset_userdata('per_page_campaigns');
		// Deleting a csv-file with errors
		if (file_exists($this->session->userdata('path_to_csv_errors')))
		{
			unlink($this->session->userdata('path_to_csv_errors'));
		}
