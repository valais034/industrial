<?php
function get_template_uri()
{
  return URL.'/theme/'.TEMPLATE.'/';
}

function have_post()
{
  global $template;
  return $template->have_post();
}

function the_post()
{
  global $template;
  return $template->the_post();
}

function post_title()
{
  global $template;
  return $template->post_title();
}

function post_content()
{
  global $template;
  return $template->post_content();
}
