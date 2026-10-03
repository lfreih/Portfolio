import { defineCollection, z } from 'astro:content'
import { glob } from 'astro/loaders'

const projects = defineCollection({
    loader: glob({ pattern: '**/*.md', base: './src/content/projects' }),
    schema: z.object({
        title: z.string(),
        slug: z.string().optional(),
        date: z.string(),
        type: z.string().optional(),
        stack: z.array(z.string()),
        tag: z.array(z.string()).optional(),
        une: z.boolean().optional(),
        websiteLink: z.string().optional(),
        githubLink: z.string().optional(),
        image: z.string().optional(),
        desc: z.string(),
        metrics: z.array(
            z.object({
                value: z.string(),
                label: z.string(),
            })
        ).optional(),
        approach: z.array(
        z.object({
            num: z.string(),
            title: z.string(),
            body: z.string(),
        })
        ).optional(),
        learned: z.string().optional(),
    }),
});

export const collections = { projects };