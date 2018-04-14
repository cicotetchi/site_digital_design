<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_db9b89384262a4dc632c18cc9828189f473ef92e433a70670ec2421845aeb4ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aceefa23459e4f4c4c9d99dc8493b868de85adfef641a1ff0eb536a4604c0108 = $this->env->getExtension("native_profiler");
        $__internal_aceefa23459e4f4c4c9d99dc8493b868de85adfef641a1ff0eb536a4604c0108->enter($__internal_aceefa23459e4f4c4c9d99dc8493b868de85adfef641a1ff0eb536a4604c0108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aceefa23459e4f4c4c9d99dc8493b868de85adfef641a1ff0eb536a4604c0108->leave($__internal_aceefa23459e4f4c4c9d99dc8493b868de85adfef641a1ff0eb536a4604c0108_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec3308ac74af763c977cf96906a65825106cae8d01d5f2918947adbd5d4eb385 = $this->env->getExtension("native_profiler");
        $__internal_ec3308ac74af763c977cf96906a65825106cae8d01d5f2918947adbd5d4eb385->enter($__internal_ec3308ac74af763c977cf96906a65825106cae8d01d5f2918947adbd5d4eb385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec3308ac74af763c977cf96906a65825106cae8d01d5f2918947adbd5d4eb385->leave($__internal_ec3308ac74af763c977cf96906a65825106cae8d01d5f2918947adbd5d4eb385_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58d4f712ae4a24e943d2bdd760826ca51782d3b7ba727b35ea6248b085ef6357 = $this->env->getExtension("native_profiler");
        $__internal_58d4f712ae4a24e943d2bdd760826ca51782d3b7ba727b35ea6248b085ef6357->enter($__internal_58d4f712ae4a24e943d2bdd760826ca51782d3b7ba727b35ea6248b085ef6357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58d4f712ae4a24e943d2bdd760826ca51782d3b7ba727b35ea6248b085ef6357->leave($__internal_58d4f712ae4a24e943d2bdd760826ca51782d3b7ba727b35ea6248b085ef6357_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc8924274ca40c3e8e32dccfade2911266b2dc0f3f0c4848a6be12dce324d8f = $this->env->getExtension("native_profiler");
        $__internal_ccc8924274ca40c3e8e32dccfade2911266b2dc0f3f0c4848a6be12dce324d8f->enter($__internal_ccc8924274ca40c3e8e32dccfade2911266b2dc0f3f0c4848a6be12dce324d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ccc8924274ca40c3e8e32dccfade2911266b2dc0f3f0c4848a6be12dce324d8f->leave($__internal_ccc8924274ca40c3e8e32dccfade2911266b2dc0f3f0c4848a6be12dce324d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
