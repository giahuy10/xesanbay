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

$canEdit = JFactory::getUser()->authorise('core.edit', 'com_uber');

if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_uber'))
{
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>

<div class="item_fields">

	<table class="table">
		

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_CUSTOMER_NAME'); ?></th>
			<td><?php echo $this->item->customer_name; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_CUSTOMER_PHONE'); ?></th>
			<td><?php echo $this->item->customer_phone; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_NUMBER_PASSENGER'); ?></th>
			<td><?php echo $this->item->number_passenger; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_FLIGHT_NUMBER'); ?></th>
			<td><?php echo $this->item->flight_number; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_DISTRICT'); ?></th>
			<td><?php echo $this->item->district; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_PICK_UP_LOCATION'); ?></th>
			<td><?php echo $this->item->pick_up_location; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_PICK_UP_TIME'); ?></th>
			<td><?php echo $this->item->pick_up_time; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_DROP_LOCATION'); ?></th>
			<td><?php echo $this->item->drop_location; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_UBER_FORM_LBL_JOB_PRICE'); ?></th>
			<td><?php echo $this->item->price; ?></td>
		</tr>

	</table>

</div>

<?php if($canEdit && $this->item->checked_out == 0): ?>

	<a class="btn" href="<?php echo JRoute::_('index.php?option=com_uber&task=job.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_UBER_EDIT_ITEM"); ?></a>

<?php endif; ?>

<?php if (JFactory::getUser()->authorise('core.delete','com_uber.job.'.$this->item->id)) : ?>

	<a class="btn btn-danger" href="#deleteModal" role="button" data-toggle="modal">
		<?php echo JText::_("COM_UBER_DELETE_ITEM"); ?>
	</a>

	<div id="deleteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3><?php echo JText::_('COM_UBER_DELETE_ITEM'); ?></h3>
		</div>
		<div class="modal-body">
			<p><?php echo JText::sprintf('COM_UBER_DELETE_CONFIRM', $this->item->id); ?></p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">Close</button>
			<a href="<?php echo JRoute::_('index.php?option=com_uber&task=job.remove&id=' . $this->item->id, false, 2); ?>" class="btn btn-danger">
				<?php echo JText::_('COM_UBER_DELETE_ITEM'); ?>
			</a>
		</div>
	</div>

<?php endif; ?>