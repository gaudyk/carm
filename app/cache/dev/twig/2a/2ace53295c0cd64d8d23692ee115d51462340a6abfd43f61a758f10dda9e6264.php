<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8cb4dba712147857bef5f1e4af04dbe30492e19aa602fa91856d74924658afb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b10644240c5e8e17b0abd43d78a123105c5a5f413d041c35cb0cf8d551be08db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10644240c5e8e17b0abd43d78a123105c5a5f413d041c35cb0cf8d551be08db->enter($__internal_b10644240c5e8e17b0abd43d78a123105c5a5f413d041c35cb0cf8d551be08db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10644240c5e8e17b0abd43d78a123105c5a5f413d041c35cb0cf8d551be08db->leave($__internal_b10644240c5e8e17b0abd43d78a123105c5a5f413d041c35cb0cf8d551be08db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e6b8ec21070b7d434b2229c3d0f2d4966ef36eac68441788bd03431e387bdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6b8ec21070b7d434b2229c3d0f2d4966ef36eac68441788bd03431e387bdb1->enter($__internal_8e6b8ec21070b7d434b2229c3d0f2d4966ef36eac68441788bd03431e387bdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8e6b8ec21070b7d434b2229c3d0f2d4966ef36eac68441788bd03431e387bdb1->leave($__internal_8e6b8ec21070b7d434b2229c3d0f2d4966ef36eac68441788bd03431e387bdb1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d745d44aa9b06f7068bfcd88c96034d82fc26e2c92e39169e19d19949e9024a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d745d44aa9b06f7068bfcd88c96034d82fc26e2c92e39169e19d19949e9024a->enter($__internal_0d745d44aa9b06f7068bfcd88c96034d82fc26e2c92e39169e19d19949e9024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0d745d44aa9b06f7068bfcd88c96034d82fc26e2c92e39169e19d19949e9024a->leave($__internal_0d745d44aa9b06f7068bfcd88c96034d82fc26e2c92e39169e19d19949e9024a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
