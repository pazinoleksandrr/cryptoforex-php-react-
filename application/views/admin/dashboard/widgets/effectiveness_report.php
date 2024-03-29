<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget" id="widget-<?php echo create_widget_id(); ?>" data-name="<?php echo _l('home_effectiveness_report_'); ?>">
    <?php if (is_admin()) { ?>
        <div class="row" id="effectiveness_report">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body padding-10">
                        <div class="widget-dragger"></div>
                        <div class="tw-flex tw-justify-between tw-items-center tw-p-1.5">
                            <p class="tw-font-medium tw-flex tw-items-center tw-mb-0 tw-space-x-1.5 rtl:tw-space-x-reverse">
                                <i class="fa-regular fa-life-ring fa-lg tw-text-neutral-500"></i>

                                <span class="tw-text-neutral-700">
                                <?php echo _l('home_effectiveness_report_'); ?>
                            </span>
                            </p>
                            <!--<div class="tw-divide-x tw-divide-solid tw-divide-neutral-300 tw-space-x-2 tw-flex tw-items-center">
                            <select class="selectpicker tw-pr-2" name="status_effectiveness"
                                    data-none-selected-text="<?php /*echo _l('status_'); */?>">
                                <option value="all"><?php /*echo ucfirst(_l('all_')); */?></option>
                                <option value="in_process"><?php /*echo _l('in_process_'); */?></option>
                                <option value="completed"><?php /*echo _l('completed_'); */?></option>
                            </select>
                            <div class="dropdown pull-right mright10">
                                <a href="#" id="effectiveness-report-mode" class="dropdown-toggle tw-pl-2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span id="effectiveness-report-mode-name"> <?php /*echo _l('this_month') */?> </span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="effectiveness-report-mode">
                                    <li>
                                        <a href="#" data-type="this_week" class="type_a"
                                            onclick="update_effectiveness_report_table(this); return false;"><?php /*echo _l('this_week') */?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="last_week" class="type_a"
                                            onclick="update_effectiveness_report_table(this); return false;"><?php /*echo _l('last_week') */?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="this_month" class="type_a selected_type"
                                            onclick="update_effectiveness_report_table(this); return false;"><?php /*echo _l('this_month') */?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="last_month" class="type_a"
                                            onclick="update_effectiveness_report_table(this); return false;"><?php /*echo _l('last_month') */?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="_filters _hidden_inputs">
                                <?php /*echo form_hidden('display_mode', 'this_month') */?>
                            </div>
                        </div>-->
                        </div>

                        <hr class="-tw-mx-3 tw-mt-2 tw-mb-4">

                        <div id="effectiveness-report-table-wrapper" class="tw-p-2">
                            <?php $this->load->view('admin/dashboard/widgets/effectiveness_report_table'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>