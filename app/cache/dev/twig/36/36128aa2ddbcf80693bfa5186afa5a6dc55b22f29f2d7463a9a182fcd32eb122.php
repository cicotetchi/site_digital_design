<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_128b51410ec9902c5866e1b4d3e6f678a07554214b7cf7716a4c4da9e7d0a20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a597f75defa64279c41b13ef920cefe4cb1790ce1744e5b0e6b75c193c20435 = $this->env->getExtension("native_profiler");
        $__internal_6a597f75defa64279c41b13ef920cefe4cb1790ce1744e5b0e6b75c193c20435->enter($__internal_6a597f75defa64279c41b13ef920cefe4cb1790ce1744e5b0e6b75c193c20435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a597f75defa64279c41b13ef920cefe4cb1790ce1744e5b0e6b75c193c20435->leave($__internal_6a597f75defa64279c41b13ef920cefe4cb1790ce1744e5b0e6b75c193c20435_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */