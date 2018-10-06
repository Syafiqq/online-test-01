if (!document.body.classList.contains('layout-top-nav'))
{
    if (Cookies.get('sidebar-toggle') == null || Cookies.get('sidebar-toggle') == "false")
    {
        document.body.classList.remove('sidebar-collapse');
    }
    else
    {
        document.body.classList.add('sidebar-collapse');
    }
}
else
{
    document.body.classList.remove('sidebar-collapse');
}
