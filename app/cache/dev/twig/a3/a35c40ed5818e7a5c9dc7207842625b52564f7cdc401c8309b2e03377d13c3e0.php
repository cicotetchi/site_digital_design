<?php

/* emails/contact.html.twig */
class __TwigTemplate_c820e998a41a6ac59a1abedc769b40fc0d0808137fb3a7340c0472e0c76835e6 extends Twig_Template
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
        $__internal_9268c021ec58ea7798ed4f1a766391d5dca4701119fd283a71f1a04807537337 = $this->env->getExtension("native_profiler");
        $__internal_9268c021ec58ea7798ed4f1a766391d5dca4701119fd283a71f1a04807537337->enter($__internal_9268c021ec58ea7798ed4f1a766391d5dca4701119fd283a71f1a04807537337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>Contact depuis votre site</title>
    <style>
    *{font-family:\"Helvetica Neue\",Helvetica,Helvetica,Arial,sans-serif;font-size:100%;line-height:1.6em;margin:0;padding:0}.btn-primary td,h1,h2,h3{font-family:\"Helvetica Neue\",Helvetica,Arial,\"Lucida Grande\",sans-serif}img{max-width:600px;width:auto}body{-webkit-font-smoothing:antialiased;height:100%;-webkit-text-size-adjust:none;width:100%!important}a{color:#348eda}.btn-primary{Margin-bottom:10px;width:auto!important}.btn-primary td{background-color:#348eda;border-radius:25px;font-size:14px;text-align:center;vertical-align:top}.btn-primary td a{background-color:#348eda;border:1px solid #348eda;border-radius:25px;border-width:10px 20px;display:inline-block;color:#fff;cursor:pointer;font-weight:700;line-height:2;text-decoration:none}.last{margin-bottom:0}.first{margin-top:0}.padding{padding:10px 0}table.body-wrap{padding:20px;width:100%}table.body-wrap .container{border:1px solid #f0f0f0}table.footer-wrap{clear:both!important;width:100%}.footer-wrap .container p{color:#666;font-size:12px}table.footer-wrap a{color:#999}h1,h2,h3{color:#111;font-weight:200;line-height:1.2em;margin:40px 0 10px}h1{font-size:36px}h2{font-size:28px}h3{font-size:22px}ol,p,ul{font-size:14px;font-weight:400;margin-bottom:10px}ol li,ul li{margin-left:5px;list-style-position:inside}.container{clear:both!important;display:block!important;Margin:0 auto!important;max-width:600px!important}.body-wrap .container{padding:20px}.content{display:block;margin:0 auto;max-width:600px}.content table{width:100%}
    </style>
  </head>
  <body bgcolor=\"#f6f6f6\" align=\"center\">
    <br/>
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" alt=\"Digital Design\">
    <table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
      <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
          <div class=\"content\">
          <table>
            <tr>
              <td>
                <p>Nouveau contact depuis votre <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("home");
        echo "\">site</a>,</p>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo " vous a contacté à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "date", array()), "d/m/Y"), "html", null, true);
        echo ".</p>
                 <p><b>Titre : </b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nomProjet", array()), "html", null, true);
        echo "</p>
                <p><b>Description du projet : </b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array()), "html", null, true);
        echo "</p>
              </td>
              <td>
                <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("home");
        echo "addProjet/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nomProjet", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array()), "html", null, true);
        echo "\">
                  <input type=\"submit\" value=\"Valider\" />
                </form>
              </td>
            </tr>
          </table>
          </div>
        </td>
        <td></td>
      </tr>
    </table>
    <table class=\"footer-wrap\">
      <tr>
        <td></td>
        <td class=\"container\">
          <div class=\"content\">
            <table>
              <tr>
                <td align=\"center\">
                  <p><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("home");
        echo "\">Digital Design</a></p>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td></td>
      </tr>
    </table>
  </body>
</html>
";
        
        $__internal_9268c021ec58ea7798ed4f1a766391d5dca4701119fd283a71f1a04807537337->leave($__internal_9268c021ec58ea7798ed4f1a766391d5dca4701119fd283a71f1a04807537337_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  70 => 28,  64 => 25,  60 => 24,  52 => 23,  48 => 22,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta name="viewport" content="width=device-width">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <title>Contact depuis votre site</title>*/
/*     <style>*/
/*     *{font-family:"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;font-size:100%;line-height:1.6em;margin:0;padding:0}.btn-primary td,h1,h2,h3{font-family:"Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif}img{max-width:600px;width:auto}body{-webkit-font-smoothing:antialiased;height:100%;-webkit-text-size-adjust:none;width:100%!important}a{color:#348eda}.btn-primary{Margin-bottom:10px;width:auto!important}.btn-primary td{background-color:#348eda;border-radius:25px;font-size:14px;text-align:center;vertical-align:top}.btn-primary td a{background-color:#348eda;border:1px solid #348eda;border-radius:25px;border-width:10px 20px;display:inline-block;color:#fff;cursor:pointer;font-weight:700;line-height:2;text-decoration:none}.last{margin-bottom:0}.first{margin-top:0}.padding{padding:10px 0}table.body-wrap{padding:20px;width:100%}table.body-wrap .container{border:1px solid #f0f0f0}table.footer-wrap{clear:both!important;width:100%}.footer-wrap .container p{color:#666;font-size:12px}table.footer-wrap a{color:#999}h1,h2,h3{color:#111;font-weight:200;line-height:1.2em;margin:40px 0 10px}h1{font-size:36px}h2{font-size:28px}h3{font-size:22px}ol,p,ul{font-size:14px;font-weight:400;margin-bottom:10px}ol li,ul li{margin-left:5px;list-style-position:inside}.container{clear:both!important;display:block!important;Margin:0 auto!important;max-width:600px!important}.body-wrap .container{padding:20px}.content{display:block;margin:0 auto;max-width:600px}.content table{width:100%}*/
/*     </style>*/
/*   </head>*/
/*   <body bgcolor="#f6f6f6" align="center">*/
/*     <br/>*/
/*     <img src="{{ asset('assets/img/favicon.png') }}" height="100" width="100" alt="Digital Design">*/
/*     <table class="body-wrap" bgcolor="#f6f6f6">*/
/*       <tr>*/
/*         <td></td>*/
/*         <td class="container" bgcolor="#FFFFFF">*/
/*           <div class="content">*/
/*           <table>*/
/*             <tr>*/
/*               <td>*/
/*                 <p>Nouveau contact depuis votre <a href="{{ url('home') }}">site</a>,</p>*/
/*                 <p>{{ contact.nom }} - {{ contact.email }} vous a contacté à {{ contact.date|date("d/m/Y") }}.</p>*/
/*                  <p><b>Titre : </b>{{ contact.nomProjet }}</p>*/
/*                 <p><b>Description du projet : </b>{{ contact.message }}</p>*/
/*               </td>*/
/*               <td>*/
/*                 <form action="{{ url('home') }}addProjet/{{ contact.nomProjet }}/{{ contact.message }}">*/
/*                   <input type="submit" value="Valider" />*/
/*                 </form>*/
/*               </td>*/
/*             </tr>*/
/*           </table>*/
/*           </div>*/
/*         </td>*/
/*         <td></td>*/
/*       </tr>*/
/*     </table>*/
/*     <table class="footer-wrap">*/
/*       <tr>*/
/*         <td></td>*/
/*         <td class="container">*/
/*           <div class="content">*/
/*             <table>*/
/*               <tr>*/
/*                 <td align="center">*/
/*                   <p><a href="{{ url('home') }}">Digital Design</a></p>*/
/*                 </td>*/
/*               </tr>*/
/*             </table>*/
/*           </div>*/
/*         </td>*/
/*         <td></td>*/
/*       </tr>*/
/*     </table>*/
/*   </body>*/
/* </html>*/
/* */
