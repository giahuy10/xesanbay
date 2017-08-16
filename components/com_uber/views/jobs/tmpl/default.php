<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Uber
 * @author     Eddy Nguyen <contact@eddynguye.com>
 * @copyright  2017 Eddy Nguyen
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

$user       = JFactory::getUser();
$userId     = $user->get('id');
$listOrder  = $this->state->get('list.ordering');
$listDirn   = $this->state->get('list.direction');
$canCreate  = $user->authorise('core.create', 'com_uber') && file_exists(JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'forms' . DIRECTORY_SEPARATOR . 'jobform.xml');
$canEdit    = $user->authorise('core.edit', 'com_uber') && file_exists(JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'forms' . DIRECTORY_SEPARATOR . 'jobform.xml');
$canCheckin = $user->authorise('core.manage', 'com_uber');
$canChange  = $user->authorise('core.edit.state', 'com_uber');
$canDelete  = $user->authorise('core.delete', 'com_uber');
function can_view($userid, $itemid) {
	// Get a db connection.
	$db = JFactory::getDbo();

	// Create a new query object.
	$query = $db->getQuery(true);

	// Select all records from the user profile table where key begins with "custom.".
	// Order it by the ordering field.
	$query->select($db->quoteName(array('id', 'status', 'driver_id')));
	$query->from($db->quoteName('#__uber_job'));
	$query->where($db->quoteName('id') . ' = '. $itemid);
	$query->where($db->quoteName('driver_id') . ' = '. $userid);
	$query->where($db->quoteName('driver_id') . ' != 0');
	

	// Reset the query using our newly populated query object.
	$db->setQuery($query);

	// Load the results as a list of stdClass objects (see later for more options on retrieving data).
	$results = $db->loadObject();
	if ($results)
		return true;
	else
		return false;
}
?>

<form action="<?php echo JRoute::_('index.php?option=com_uber&view=jobs'); ?>" method="post"
      name="adminForm" id="adminForm">

	<?php echo JLayoutHelper::render('default_filter', array('view' => $this), dirname(__FILE__)); ?>

		<?php foreach ($this->items as $i => $item) : ?>
			<?php $canview = can_view($user->id, $item->id)?>
			<div class="job-item">
				<div class="container">
				<div class="row">
					<?php if ($item->flight_number) { ?>
						<i class="fa fa-plane" aria-hidden="true"></i> Sân bay <i class="fa fa-arrows-h" aria-hidden="true"></i> 
						
						<?php $i=0; foreach($item->pick_up_location as $location){						
							echo $location->com_point;			
								$i++;
								if ($i < $item->pick_up_number)
									echo " | ";
						} ?>
					<?php } else {
						$i=0; foreach($item->pick_up_location as $location){						
							echo $location->com_point;			
								$i++;
								if ($i < $item->pick_up_number)
								echo " | ";
						} ?>
						<i class="fa fa-arrows-h" aria-hidden="true"></i> <i class="fa fa-plane" aria-hidden="true"></i> Sân bay
					<?php }?>
					(<?php echo $item->district; ?>)
					
				</div>
						<?php //echo $item->id; ?>
				<div class="row">
					<div class="col-xs-12">
					Khách hàng: <?php if ($canview==true) {
						echo $item->customer_name." - ".$item->customer_phone;
					} else {
						echo "<a href='' class='btn btn-info'>Mua để xem thông tin</a>";
					}?>
					</div>
					<div class="col-xs-12 col-sm-4">
						Đón: <?php echo $item->pick_up_number?> điểm
					</div>
					<div class="col-xs-12 col-sm-4">
						Đón: <?php echo $item->number_passenger; ?> khách
					</div>
					<div class="col-xs-12 col-sm-4">
						Đón lúc: <?php echo $item->pick_up_time; ?>
					</div>
				</div>
						
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						Chuyến bay: <?php echo $item->flight_number; ?>
					</div>
					<div class="col-xs-12 col-sm-4">
						Yêu cầu xe: <?php echo $item->number_seat; ?>
					</div>
					<div class="col-xs-12 col-sm-4">
						Giá: <?php echo number_format($item->price); ?>
					</div>
					
				</div>
			</div>	
		</div>
				

					
			

					
			
				
				
					
					

					
				

				

					
			
			

		
		<?php endforeach; ?>
		

	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>

<?php if($canDelete) : ?>
<script type="text/javascript">

	jQuery(document).ready(function () {
		jQuery('.delete-button').click(deleteItem);
	});

	function deleteItem() {

		if (!confirm("<?php echo JText::_('COM_UBER_DELETE_MESSAGE'); ?>")) {
			return false;
		}
	}
</script>
<?php endif; ?>
