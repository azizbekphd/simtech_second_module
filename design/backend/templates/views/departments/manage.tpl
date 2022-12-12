{capture name="mainbox"}
    Hi mom
{/capture}

{capture name="mainbox_title"}
    <span class="ty-mainbox-title__left">
        {__("departments")}
    </span>
{/capture}

{include file="common/mainbox.tpl"
    title=$smarty.capture.mainbox_title
    content=$smarty.capture.mainbox
    select_languages=true}