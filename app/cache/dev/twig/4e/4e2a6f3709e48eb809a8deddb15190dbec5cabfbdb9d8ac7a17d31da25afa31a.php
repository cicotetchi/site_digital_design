<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_57ef6785c0509f29b1bb479cedfe433c120cc92ce82a68bba80eea245aa68e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c96d86969abcb6fdb9ce9882b60c713b7fe7e19d35db801ec328e070aa9331b1 = $this->env->getExtension("native_profiler");
        $__internal_c96d86969abcb6fdb9ce9882b60c713b7fe7e19d35db801ec328e070aa9331b1->enter($__internal_c96d86969abcb6fdb9ce9882b60c713b7fe7e19d35db801ec328e070aa9331b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96d86969abcb6fdb9ce9882b60c713b7fe7e19d35db801ec328e070aa9331b1->leave($__internal_c96d86969abcb6fdb9ce9882b60c713b7fe7e19d35db801ec328e070aa9331b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
