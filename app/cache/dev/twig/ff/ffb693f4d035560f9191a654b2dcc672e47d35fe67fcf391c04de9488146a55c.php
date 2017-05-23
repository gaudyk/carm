<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_557eb14be1cd78bec007856c49dd8da309dfee46902d26a0249d464d8aac60a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bef23d892460ef4b8e2d161c39e84724670aa2a27ff943fdfbcaf51c550c793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef23d892460ef4b8e2d161c39e84724670aa2a27ff943fdfbcaf51c550c793d->enter($__internal_bef23d892460ef4b8e2d161c39e84724670aa2a27ff943fdfbcaf51c550c793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef23d892460ef4b8e2d161c39e84724670aa2a27ff943fdfbcaf51c550c793d->leave($__internal_bef23d892460ef4b8e2d161c39e84724670aa2a27ff943fdfbcaf51c550c793d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1003ebc0bdc1c5b0ddf327bfedbe9e820369cad3fb7f62089d54a1cdba6b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1003ebc0bdc1c5b0ddf327bfedbe9e820369cad3fb7f62089d54a1cdba6b024->enter($__internal_b1003ebc0bdc1c5b0ddf327bfedbe9e820369cad3fb7f62089d54a1cdba6b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1003ebc0bdc1c5b0ddf327bfedbe9e820369cad3fb7f62089d54a1cdba6b024->leave($__internal_b1003ebc0bdc1c5b0ddf327bfedbe9e820369cad3fb7f62089d54a1cdba6b024_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87a40a911fc04291e65904b3436dc862cdc51f1f45f694e4a6d1cc5c137151fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a40a911fc04291e65904b3436dc862cdc51f1f45f694e4a6d1cc5c137151fa->enter($__internal_87a40a911fc04291e65904b3436dc862cdc51f1f45f694e4a6d1cc5c137151fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87a40a911fc04291e65904b3436dc862cdc51f1f45f694e4a6d1cc5c137151fa->leave($__internal_87a40a911fc04291e65904b3436dc862cdc51f1f45f694e4a6d1cc5c137151fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dab43cfe544d77f0b38e6c411521d1cd1528685ef93e81567e8298d615e3cbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab43cfe544d77f0b38e6c411521d1cd1528685ef93e81567e8298d615e3cbec->enter($__internal_dab43cfe544d77f0b38e6c411521d1cd1528685ef93e81567e8298d615e3cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dab43cfe544d77f0b38e6c411521d1cd1528685ef93e81567e8298d615e3cbec->leave($__internal_dab43cfe544d77f0b38e6c411521d1cd1528685ef93e81567e8298d615e3cbec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
