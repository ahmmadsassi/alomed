<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @alomed/pages/viewlivraison.html.twig */
class __TwigTemplate_84b1c76da8ef6b2462733743d6eabc84e3bf31229d684ef7b097f2d7acf21a30 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/viewlivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/viewlivraison.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<meta charset=\"UTF-8\">
<title>home page </title>
<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"stylesheet\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\"  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/2.css"), "html", null, true);
        echo "\" />


<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<nav >

    <div class=\"logo\">
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/logo.jpg"), "html", null, true);
        echo "\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/indexmedecin\">MÉDECIN</a>
        </li>
        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/indexpatient\">Patient</a></li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\">LIVREUR</a>
        </li>
        <li><a href=\"index.html\">|  SE DÉCONNECTER</a></li>
    </ul>
</nav>
</head>
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/indexmedecin\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
            <tr>livraison</tr>
            <tr>
                <td class=\"list-group-item\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "idlivraison", []), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "patient", []), "nom", []), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "livreur", []), "nom", []), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "getDatelivraison", [], "method"), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "tarif", []), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "pharmacie", []), "nom", []), "html", null, true);
        echo "</td>
                <td class=\"list-group-item\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "etat", []), "html", null, true);
        echo "</td>
               <td class=\"list-group-item\">
                   <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/livraisonconfirmer/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "idlivraison", []), "html", null, true);
        echo "\" id=\"a1\">
                       <button class=\"btn btn-primary\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
                <span class=\"p\"> Confirmer livraison</span>
            </span>
                       </button>
               </td>

        </table>
    </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@alomed/pages/viewlivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  112 => 54,  98 => 43,  93 => 41,  88 => 39,  77 => 31,  59 => 16,  55 => 15,  51 => 14,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<meta charset=\"UTF-8\">
<title>home page </title>
<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"stylesheet\"  href=\"{{ asset('css/bootstrap.css') }}\" />
<link rel=\"stylesheet\"  href=\"{{ asset('css/style1.css') }}\" />
<link rel=\"stylesheet\"  href=\"{{ asset('css/2.css') }}\" />


<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<nav >

    <div class=\"logo\">
        <img src=\"{{ asset('css/logo.jpg') }}\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>
        <li>
            <a href=\"{{ absolute_url(asset('')) }}app_dev.php/indexmedecin\">MÉDECIN</a>
        </li>
        <li><a href=\"{{ absolute_url(asset('')) }}app_dev.php/indexpatient\">Patient</a></li>
        <li>
            <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\">LIVREUR</a>
        </li>
        <li><a href=\"index.html\">|  SE DÉCONNECTER</a></li>
    </ul>
</nav>
</head>
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"{{ absolute_url(asset('')) }}app_dev.php/indexmedecin\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
            <tr>livraison</tr>
            <tr>
                <td class=\"list-group-item\">{{ livraison.idlivraison}}</td>
                <td class=\"list-group-item\">{{ livraison.patient.nom }}</td>
                <td class=\"list-group-item\">{{ livraison.livreur.nom}}</td>
                <td class=\"list-group-item\">{{ livraison.getDatelivraison()|date('d-m-Y')}}</td>
                <td class=\"list-group-item\">{{ livraison.tarif}}</td>
                <td class=\"list-group-item\">{{ livraison.pharmacie.nom}}</td>
                <td class=\"list-group-item\">{{ livraison.etat}}</td>
               <td class=\"list-group-item\">
                   <a href=\"{{ absolute_url(asset(''))}}app_dev.php/livraisonconfirmer/{{ livraison.idlivraison }}\" id=\"a1\">
                       <button class=\"btn btn-primary\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
                <span class=\"p\"> Confirmer livraison</span>
            </span>
                       </button>
               </td>

        </table>
    </div>
</div>
</body>
</html>", "@alomed/pages/viewlivraison.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/viewlivraison.html.twig");
    }
}
