<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b95cc0152d3e5d09a8abbb2b1fb12cba3170b84b9589d72d9f0ab6c2455e4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_840e3e650d482a30e8b3519197190c301eb49f70121510344fefddc901472c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840e3e650d482a30e8b3519197190c301eb49f70121510344fefddc901472c45->enter($__internal_840e3e650d482a30e8b3519197190c301eb49f70121510344fefddc901472c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840e3e650d482a30e8b3519197190c301eb49f70121510344fefddc901472c45->leave($__internal_840e3e650d482a30e8b3519197190c301eb49f70121510344fefddc901472c45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c667fdabb1a892aad68d0b6957217d3958fd4728b9f9adb82c2ecbcf1e480bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c667fdabb1a892aad68d0b6957217d3958fd4728b9f9adb82c2ecbcf1e480bda->enter($__internal_c667fdabb1a892aad68d0b6957217d3958fd4728b9f9adb82c2ecbcf1e480bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c667fdabb1a892aad68d0b6957217d3958fd4728b9f9adb82c2ecbcf1e480bda->leave($__internal_c667fdabb1a892aad68d0b6957217d3958fd4728b9f9adb82c2ecbcf1e480bda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77947076b3d1f99bb742d2473ee7d724d29489e5bf40decf435beb2909601047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77947076b3d1f99bb742d2473ee7d724d29489e5bf40decf435beb2909601047->enter($__internal_77947076b3d1f99bb742d2473ee7d724d29489e5bf40decf435beb2909601047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77947076b3d1f99bb742d2473ee7d724d29489e5bf40decf435beb2909601047->leave($__internal_77947076b3d1f99bb742d2473ee7d724d29489e5bf40decf435beb2909601047_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de673a2d3be415c349815bb0a57aa9838465b487d865759542190b1a2c5e8b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de673a2d3be415c349815bb0a57aa9838465b487d865759542190b1a2c5e8b65->enter($__internal_de673a2d3be415c349815bb0a57aa9838465b487d865759542190b1a2c5e8b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de673a2d3be415c349815bb0a57aa9838465b487d865759542190b1a2c5e8b65->leave($__internal_de673a2d3be415c349815bb0a57aa9838465b487d865759542190b1a2c5e8b65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
