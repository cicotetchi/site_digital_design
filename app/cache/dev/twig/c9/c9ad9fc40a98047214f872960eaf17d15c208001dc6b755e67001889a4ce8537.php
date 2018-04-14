<?php

/* menu.html.twig */
class __TwigTemplate_56338bdd847287069bc104fdfcc341543b8f402a67379f102399b6f657d545a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8157310c69e3d348b4314f904ccc20415bba3b938f3074690053dd7e376fdb = $this->env->getExtension("native_profiler");
        $__internal_bd8157310c69e3d348b4314f904ccc20415bba3b938f3074690053dd7e376fdb->enter($__internal_bd8157310c69e3d348b4314f904ccc20415bba3b938f3074690053dd7e376fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav id=\"bt-menu\" class=\"bt-menu\">
  <a href=\"#\" class=\"bt-menu-trigger\"><span>Menu</span></a>
  <ul>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("home");
        echo "\">Accueil</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("projets");
        echo "\">Projets</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("tutoriels");
        echo "\">Tutos</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("promotions");
        echo "\">Promotions</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("contact");
        echo "\">Contact</a></li>
  </ul>
  <ul>
    <li><a href=\"https://www.facebook.com/digitaldesign.brest\" target=\"_blank\"><i class=\"fa fa-facebook-official\"></i></a></li>
    <li><a href=\"https://github.com/DigitalDesign\" target=\"_blank\"><i class=\"fa fa-github\"></i></a></li>
    <li><a href=\"https://www.youtube.com/channel/UCGSNBV7l9lUefwb4KOS4NOA\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
  </ul>
</nav>
";
        
        $__internal_bd8157310c69e3d348b4314f904ccc20415bba3b938f3074690053dd7e376fdb->leave($__internal_bd8157310c69e3d348b4314f904ccc20415bba3b938f3074690053dd7e376fdb_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <nav id="bt-menu" class="bt-menu">*/
/*   <a href="#" class="bt-menu-trigger"><span>Menu</span></a>*/
/*   <ul>*/
/*     <li><a href="{{ url('home') }}">Accueil</a></li>*/
/*     <li><a href="{{ url('projets') }}">Projets</a></li>*/
/*     <li><a href="{{ url('tutoriels') }}">Tutos</a></li>*/
/*     <li><a href="{{ url('promotions') }}">Promotions</a></li>*/
/*     <li><a href="{{ url('contact') }}">Contact</a></li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li><a href="https://www.facebook.com/digitaldesign.brest" target="_blank"><i class="fa fa-facebook-official"></i></a></li>*/
/*     <li><a href="https://github.com/DigitalDesign" target="_blank"><i class="fa fa-github"></i></a></li>*/
/*     <li><a href="https://www.youtube.com/channel/UCGSNBV7l9lUefwb4KOS4NOA" target="_blank"><i class="fa fa-youtube"></i></a></li>*/
/*   </ul>*/
/* </nav>*/
/* */
