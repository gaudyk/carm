<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d8575e6d0835398d31fcfda4747780ce80c73eb592211fa9a54887f086b151d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b3bf8b9e0e337a09738c74b5bd597d20eb09beacd906abe88a8904ff7cff379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3bf8b9e0e337a09738c74b5bd597d20eb09beacd906abe88a8904ff7cff379->enter($__internal_0b3bf8b9e0e337a09738c74b5bd597d20eb09beacd906abe88a8904ff7cff379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0b3bf8b9e0e337a09738c74b5bd597d20eb09beacd906abe88a8904ff7cff379->leave($__internal_0b3bf8b9e0e337a09738c74b5bd597d20eb09beacd906abe88a8904ff7cff379_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f87b5de5b39a3f3d5c2fd9adf98e27994b5a64cf8b050ea9e8032b1b7143df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f87b5de5b39a3f3d5c2fd9adf98e27994b5a64cf8b050ea9e8032b1b7143df0->enter($__internal_0f87b5de5b39a3f3d5c2fd9adf98e27994b5a64cf8b050ea9e8032b1b7143df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0f87b5de5b39a3f3d5c2fd9adf98e27994b5a64cf8b050ea9e8032b1b7143df0->leave($__internal_0f87b5de5b39a3f3d5c2fd9adf98e27994b5a64cf8b050ea9e8032b1b7143df0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
