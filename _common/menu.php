<?php
$app_title = "Warehouse Management System";
$app_abr = "WMS";
$app_id = 6;
$base_url = 'window.location.origin + '/' + window.location.pathname.split( '/' )[1]';
$menu = '<ul class="nav side-menu" style="display: ;" id="main_menu">
<!-- <li style="color: #ccc;"> NahereLimited </li> -->
<li id="dshbd" style="display: ;"><a href="/warehouse/"><i class="fa fa-home"></i>
        Home </a>
</li>

<li id="procurement" style="display: none;"><a><i class="fa fa-home"></i>
        Procurement <span class="fa fa-chevron-down"></span> </a>

    <ul class="nav child_menu">
        <li id="purchaseorders" style="display: none;"><a
                href="purchaseorders">Purchase Orders</a></li>
        <li id="paystovendors" style="display: none;"><a
                href="paystovendors">Payments to Vendors</a></li>
    </ul>

</li>

<li id="incoming_tab" style="display: none;"><a><i
            class="fa fa-cart-arrow-down"></i> Incoming <span
            class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">

        <li id="receiveorders" style="display: none;"><a href="po_test">Receive
                Orders</a></li>
        <li id="itemsreceivedlist" style="display: none;"><a
                href="receivepoitems">Items Received</a></li>

    </ul>
</li>

<li id="outgoing_tab" style="display: none;"><a><i class="fa fa-arrow-up"></i>
        Outgoing <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
        <li id="invoicesreceipts" style="display: none;"><a
                href="invoicesreceipts">Issue Orders</a></li>

        <li id="supplyitems" style="display: none;"><a href="supplyitems">Items
                Issued</a></li>
    </ul>
</li>

<!-- <li id="po_tab" style="display: none;"><a href="po"><i class="fa fa-money"></i> Purchase Orders </a>
    </li>
    <li id="incoming_tab" style="display: none;"><a href="receive_items"><i class="fa fa-cart-arrow-down"></i> Incoming </a>
    </li> -->

        <!-- <li id="invoice_tab" style="display: none;"><a href="outgoing_by_batch"><i class="fa fa-file-text-o"></i> Invoices </a>
    </li>

    <li id="outgoing_tab" style="display: none;"><a href="release_items"><i class="fa fa-arrow-up"></i> Outgoing </a>
    </li> -->

<li id="sales_tab" style="display: none;"><a><i class="fa fa-money"></i> Sales <span
            class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
        <li style="display: none;" id="invoicesreceipts333"><a
                href="invoicesandreceipts">Invoice/Receipt</a></li>
        <li style="display: none;" id="paysfromclients_2"><a href="paysfromclients">Payments from
                Clients</a></li>

    </ul>
</li>

  <li id="transfe" style="display:block;"><a><i
                                                class="fa fa-sliders"></i>Transfers<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li id="transfe" ><a href="#">Send Out</a>
                                                <ul class="nav child_menu">
                                                    <li id="transfer" ><a
                                                            href="internal_transfer">Internal</a></li>
                                                    <li id="transfer_history"><a href="external_transfer">External</a>
                                                    </li>
                                                </ul>

                                            </li>
                                            <li id="transfe"><a href="accepted_transfers">Receive</a>
                                                <!-- <ul class="nav child_menu">
                                                    <li id="transfer" style="display: "><a href="accepted_transfers">Accepted Transfers</a></li>
                                                    <li id="transfer_history"><a href="moved_items">Moved Items</a>
                                                    </li>
                                            </ul> -->

                                            </li>
                                            <!-- <li id="transfer_history"><a href="transfer_history">Transfer History</a>
                                            </li> -->
                                            <li id="transfer_not"><a href="transfer_notifications">Transfer
                                                    Notifications</a>
                                            </li>
                                        </ul>
                                    </li>

<li id="qty_adjustment" style="display: none;"><a><i class="fa fa-sliders"></i>
        Quantity Adjustment <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li id="upward_adjustment"><a href="upward_adjustment">Add</a></li>
        <li id="downward_adjustment"><a href="downward_adjustment">Remove</a></li>
        <li id="qty_adj_history"><a href="qty_adj_history">History</a></li>
    
    </li>
  
    </ul>
</li>

<li id="expenses" style="display: none;"><a href="expenses"><i
            class="fa fa-money"></i> Expenses </a>

</li>


<li id="transfer" style="display: none;"><a><i
            class="fa fa-sliders"></i>Transfers<span
            class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li id="transfer" ><a href="#">Send Out</a>
            <ul class="nav child_menu">
                <li id="transfer" ><a
                        href="internal_transfer">Internal</a></li>
                <li id="transfer_history"><a href="external_transfer">External</a>
                </li>
            </ul>

        </li>
        <li id="transfer"><a href="accepted_transfers">Receive</a>
            <!-- <ul class="nav child_menu">
                <li id="transfer" style="display: "><a href="accepted_transfers">Accepted Transfers</a></li>
                <li id="transfer_history"><a href="moved_items">Moved Items</a>
                </li>
        </ul> -->

        </li>
        <!-- <li id="transfer_history"><a href="transfer_history">Transfer History</a>
        </li> -->
        <li id="transfer_not"><a href="transfer_notifications">Transfer
                Notifications</a>
        </li>
    </ul>
</li>
<!-- <ul class="nav child_menu">
    <li id="upward_adjustment"><a href="upward_adjustment">Add</a></li>
    <li id="downward_adjustment"><a href="downward_adjustment">Remove</a></li>
    <li id="qty_adj_history"><a href="qty_adj_history">History</a></li>
    
    <li id="transfer_history"><a href="transfer_history">Transfer History</a>
    </li>
</ul> -->
</li>




<!-- <li id="warehouses" style="display: none;"><a href="warehouses"><i class="fa fa-arrow-up"></i> Warehouses </a>  -->
<!-- </li> -->



<li id="items" style="display: none;"><a href="items"><i
            class="fa fa-shopping-basket"></i> Items List </a>
</li>

<li id="contacts" style="display: none;"><a href="contacts"><i
            class="fa fa-users"></i> Contacts </a>
</li>

<li id="settings_tab" class="settings_tab" style="display: none;"><a><i class="fa fa-gear"></i> Settings
        <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="warehouses">Warehouses</a></li>
        <li><a href="profileandroles">Permissions</a></li>
        <li><a href="unit_type">Unit Type</a></li>
        <li><a href="users_perms">Users</a></li>
        <li><a href="preferences">Prefrences</a>
        </li>
        <!-- <li><a href="bizprofile">Business Profile</a></li> -->
        <li style="display: none"><a href="whsections" id="whsections">Warehouse Sections</a></li>

    </ul>
</li>


<!--   <li id="procurement_report" style="display: none;"><a><i class="fa fa-file"></i> Reports <span class="fa fa-chevron-down"></span> </a>

<ul class="nav child_menu">
  <li id="vendors" style="display: none;"><a href="vendors_report">Vendors</a></li>
  <li id="expenses" style="display: none;"><a href="expenses_report">Expenses</a></li>
</ul>

</li> -->

<li id="report_tab" style="display: none;"><a href="reports"><i
            class="fa fa-bar-chart"></i> Reports </a>
</li>

<li id="switch_tab" style="display: none;"><a id="switch"><i
            class="fa fa-refresh"></i> Switch Warehouse</a>
</li>

<!-- <li id="switch_ooo"></li> -->

</ul>';
?>