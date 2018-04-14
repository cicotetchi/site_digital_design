<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce1f2b42085a805a093fdd5574fef4ee96e879a76003508d2530559fe2cde1b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8abbd08dac8e8580cf6c4b76824f61040f8a7918f2d2939e1413639f9a013d80 = $this->env->getExtension("native_profiler");
        $__internal_8abbd08dac8e8580cf6c4b76824f61040f8a7918f2d2939e1413639f9a013d80->enter($__internal_8abbd08dac8e8580cf6c4b76824f61040f8a7918f2d2939e1413639f9a013d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abbd08dac8e8580cf6c4b76824f61040f8a7918f2d2939e1413639f9a013d80->leave($__internal_8abbd08dac8e8580cf6c4b76824f61040f8a7918f2d2939e1413639f9a013d80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_873e0afc646f16cbcc5457850237d3a101c85e0fb9a4cb129cbe2a2db1b0be75 = $this->env->getExtension("native_profiler");
        $__internal_873e0afc646f16cbcc5457850237d3a101c85e0fb9a4cb129cbe2a2db1b0be75->enter($__internal_873e0afc646f16cbcc5457850237d3a101c85e0fb9a4cb129cbe2a2db1b0be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_873e0afc646f16cbcc5457850237d3a101c85e0fb9a4cb129cbe2a2db1b0be75->leave($__internal_873e0afc646f16cbcc5457850237d3a101c85e0fb9a4cb129cbe2a2db1b0be75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed5e0e61b3bc98279df89ea1b39ab5aba86674f3cb31a65b4a691cf75e50bf2a = $this->env->getExtension("native_profiler");
        $__internal_ed5e0e61b3bc98279df89ea1b39ab5aba86674f3cb31a65b4a691cf75e50bf2a->enter($__internal_ed5e0e61b3bc98279df89ea1b39ab5aba86674f3cb31a65b4a691cf75e50bf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed5e0e61b3bc98279df89ea1b39ab5aba86674f3cb31a65b4a691cf75e50bf2a->leave($__internal_ed5e0e61b3bc98279df89ea1b39ab5aba86674f3cb31a65b4a691cf75e50bf2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09d894e579a535c97bfa0a510c591c1a9117471a9146f06f5f38808263932f11 = $this->env->getExtension("native_profiler");
        $__internal_09d894e579a535c97bfa0a510c591c1a9117471a9146f06f5f38808263932f11->enter($__internal_09d894e579a535c97bfa0a510c591c1a9117471a9146f06f5f38808263932f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09d894e579a535c97bfa0a510c591c1a9117471a9146f06f5f38808263932f11->leave($__internal_09d894e579a535c97bfa0a510c591c1a9117471a9146f06f5f38808263932f11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
