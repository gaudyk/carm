<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5dc91915c415ea7bfde143cd4be59284a9b5afff22b537828e1e308be5d14e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08fc52168e960de4c3ee331e55bba7b61924a1921eb5e7a9d28e25e60939605f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fc52168e960de4c3ee331e55bba7b61924a1921eb5e7a9d28e25e60939605f->enter($__internal_08fc52168e960de4c3ee331e55bba7b61924a1921eb5e7a9d28e25e60939605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08fc52168e960de4c3ee331e55bba7b61924a1921eb5e7a9d28e25e60939605f->leave($__internal_08fc52168e960de4c3ee331e55bba7b61924a1921eb5e7a9d28e25e60939605f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84f5bb566d487c15e8d39475a006239e4fbd809b22944bd660fbe56f3f1b1a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f5bb566d487c15e8d39475a006239e4fbd809b22944bd660fbe56f3f1b1a87->enter($__internal_84f5bb566d487c15e8d39475a006239e4fbd809b22944bd660fbe56f3f1b1a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_84f5bb566d487c15e8d39475a006239e4fbd809b22944bd660fbe56f3f1b1a87->leave($__internal_84f5bb566d487c15e8d39475a006239e4fbd809b22944bd660fbe56f3f1b1a87_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a280f433689f365878b3fea0842987e1d47dd498c7374afd00e306b14156a0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a280f433689f365878b3fea0842987e1d47dd498c7374afd00e306b14156a0d4->enter($__internal_a280f433689f365878b3fea0842987e1d47dd498c7374afd00e306b14156a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a280f433689f365878b3fea0842987e1d47dd498c7374afd00e306b14156a0d4->leave($__internal_a280f433689f365878b3fea0842987e1d47dd498c7374afd00e306b14156a0d4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e431b68d192b475b2bd8f2bb4ae08b4ffae28fba0b4d9ac07835cffbb16ad074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e431b68d192b475b2bd8f2bb4ae08b4ffae28fba0b4d9ac07835cffbb16ad074->enter($__internal_e431b68d192b475b2bd8f2bb4ae08b4ffae28fba0b4d9ac07835cffbb16ad074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e431b68d192b475b2bd8f2bb4ae08b4ffae28fba0b4d9ac07835cffbb16ad074->leave($__internal_e431b68d192b475b2bd8f2bb4ae08b4ffae28fba0b4d9ac07835cffbb16ad074_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7ff9b512eb3722742fec352584529a878d21110e6e88f3b61667a5e44472dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ff9b512eb3722742fec352584529a878d21110e6e88f3b61667a5e44472dbf->enter($__internal_d7ff9b512eb3722742fec352584529a878d21110e6e88f3b61667a5e44472dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d7ff9b512eb3722742fec352584529a878d21110e6e88f3b61667a5e44472dbf->leave($__internal_d7ff9b512eb3722742fec352584529a878d21110e6e88f3b61667a5e44472dbf_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
