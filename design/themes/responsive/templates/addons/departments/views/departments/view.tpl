{if $departments}
    {script src="js/tygh/exceptions.js"}
    
    {if !$no_pagination}     
        {include file="common/pagination.tpl"}
    {/if}

    {$columns = 3}
    {if !$show_empty}
        {split data=$departments size=$columns assign="splitted_departments"}
    {else}
        {split data=$departments size=$columns assign="splitted_departments" skip_complete=true}
    {/if}

    {math equation="100 / x" x=$columns assign="cell_width"}

    {$image_width=$settings.Thumbnails.product_lists_thumbnail_width}
    {$image_height=$settings.Thumbnails.product_lists_thumbnail_height}

    <div class="grid-list">
        {strip}
            {foreach from=$splitted_departments item="sdepartments" }
                {foreach from=$sdepartments item="department"}
                    <div class="ty-column{$columns}">
                        {if $department}
                            {assign var="obj_id" value=$department.department_id}
                            {assign var="obj_id_prefix" value="`$obj_prefix``$department.department_id`"}
                          
                            <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                <div class="ty-grid-list__image">
                                    <a href={"departments.details?department_id={$department.department_id}"|fn_url}>
                                    {include
                                        file="common/image.tpl"
                                        images=$department.main_pair.icon|default:$department.main_pair.detailed
                                        image_id=$departments.main_pair.image_id
                                        image_width=$image_width
                                        image_height=$image_height}
                                    </a>
                                </div>

                                <div class="ty-grid-list__item-name">
                                    <bdi>
                                        <a href="{"departments.details?department_id={$department.department_id}"|fn_url}" class="department-title" title="{$department.name}">{$department.name}</a>
                                    </bdi>
                                </div>
                                <div class="ty-grid-list__supervisor">
                                    {$department.supervisor_data.firstname}&nbsp;
                                    {$department.supervisor_data.lastname}
                                </div>
                            </div>
                        {/if}
                    </div>
                {/foreach}
            {/foreach}
        {/strip}
    </div>

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}
{else}
    {include file="common/no_items.tpl"
        text_no_found=__("departments.departments_not_found")
    }
{/if}

{capture name="mainbox_title"}{$title}{/capture}