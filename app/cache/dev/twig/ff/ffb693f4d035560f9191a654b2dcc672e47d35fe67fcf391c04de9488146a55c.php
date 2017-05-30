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
        $__internal_abdee61d06573dd5cf870310d5ec8d1924a11522d9b0626ae94b9c928ccae257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdee61d06573dd5cf870310d5ec8d1924a11522d9b0626ae94b9c928ccae257->enter($__internal_abdee61d06573dd5cf870310d5ec8d1924a11522d9b0626ae94b9c928ccae257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdee61d06573dd5cf870310d5ec8d1924a11522d9b0626ae94b9c928ccae257->leave($__internal_abdee61d06573dd5cf870310d5ec8d1924a11522d9b0626ae94b9c928ccae257_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e00c5e44045545fcfa1a14f2f445c18bde4f4dd420eea56636131fc255efbc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00c5e44045545fcfa1a14f2f445c18bde4f4dd420eea56636131fc255efbc18->enter($__internal_e00c5e44045545fcfa1a14f2f445c18bde4f4dd420eea56636131fc255efbc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e00c5e44045545fcfa1a14f2f445c18bde4f4dd420eea56636131fc255efbc18->leave($__internal_e00c5e44045545fcfa1a14f2f445c18bde4f4dd420eea56636131fc255efbc18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_307524e01c4ad0da96d878874aaafaded5584b7549856197026181d219e57298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307524e01c4ad0da96d878874aaafaded5584b7549856197026181d219e57298->enter($__internal_307524e01c4ad0da96d878874aaafaded5584b7549856197026181d219e57298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_307524e01c4ad0da96d878874aaafaded5584b7549856197026181d219e57298->leave($__internal_307524e01c4ad0da96d878874aaafaded5584b7549856197026181d219e57298_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_981bf2316bdf0ed9e7f76ea91082a77fb6f5561f48e86896595975c6837ea6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981bf2316bdf0ed9e7f76ea91082a77fb6f5561f48e86896595975c6837ea6a7->enter($__internal_981bf2316bdf0ed9e7f76ea91082a77fb6f5561f48e86896595975c6837ea6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_981bf2316bdf0ed9e7f76ea91082a77fb6f5561f48e86896595975c6837ea6a7->leave($__internal_981bf2316bdf0ed9e7f76ea91082a77fb6f5561f48e86896595975c6837ea6a7_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
