<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_5ba2c98ffbe3efbafc54af4dbc7cff0f3d86bc5d6f37b8aabd7191ce3b433734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae99d82b2551dc5960292e2143c0157f1c3cfdc9db16cd88d69977e6f564554 = $this->env->getExtension("native_profiler");
        $__internal_2ae99d82b2551dc5960292e2143c0157f1c3cfdc9db16cd88d69977e6f564554->enter($__internal_2ae99d82b2551dc5960292e2143c0157f1c3cfdc9db16cd88d69977e6f564554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae99d82b2551dc5960292e2143c0157f1c3cfdc9db16cd88d69977e6f564554->leave($__internal_2ae99d82b2551dc5960292e2143c0157f1c3cfdc9db16cd88d69977e6f564554_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_84d52c8d8d05a708dcad2b25134aa285d66f8714896619eefbe19c699cb6eace = $this->env->getExtension("native_profiler");
        $__internal_84d52c8d8d05a708dcad2b25134aa285d66f8714896619eefbe19c699cb6eace->enter($__internal_84d52c8d8d05a708dcad2b25134aa285d66f8714896619eefbe19c699cb6eace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_84d52c8d8d05a708dcad2b25134aa285d66f8714896619eefbe19c699cb6eace->leave($__internal_84d52c8d8d05a708dcad2b25134aa285d66f8714896619eefbe19c699cb6eace_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
